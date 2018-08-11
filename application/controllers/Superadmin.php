<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Superadmin extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	/**
	 * Listando as empresas cadastradas ...
	 * @return [type] [description]
	 */
	public function listarempresas(){
		// ...
		$data['users'] = $this->users_model->getAllUsers();
		$this->load->loaderPage("superadmin/listar_empresas", $data);
	}

	/**
	 * Cadastra uma nova empresa ...
	 * @return [type] [description]
	 */
	public function novaempresa(){
		// ...
		if($_SERVER['REQUEST_METHOD'] == "POST"){
			/* Validando os dados do formulário */
            $this->form_validation->set_rules('email', _t("e-mail"), 'required|trim|valid_email|is_unique[admin_empresa.email]');
            $this->form_validation->set_rules('senha', _t("senha"), 'required|min_length[6]|trim');
            $this->form_validation->set_rules('contrasenha', _t("confirmar senha"), 'required|min_length[6]|trim|matches[senha]');
			/* Verificando se for validado, vamos inserir no banco de dados */
		 	if ($this->form_validation->run() == FALSE){
                $errors['msg'] = validation_errors();
                $this->session->set_flashdata('danger', $errors);
            } else {
            	unset($_POST['contrasenha']);
            	$_POST['status'] = 1;
            	$_POST['cadastro'] = date("Y-m-d H:i:s");
            	$_POST['senha'] = password_hash($_POST['senha'], PASSWORD_DEFAULT);
                if($this->users_model->novaEmpresa($this->input->post()) == TRUE){
                	$success = _t("O usuário foi cadastrado com sucesso e já pode começar a usar o sistema.");
                	$this->session->set_flashdata('success', $success);
                	redirect('superadmin/listarempresas');
                } else {
                	$error = _t("Não foi possível cadastrar o usuário. Contate o administrador.");
                	$this->session->set_flashdata('danger', $error);
                }
            }	
		}
		/* Renderizando a view depois de carregar os dados */
		$this->load->loaderPage("superadmin/nova_empresa", $data = null);
	}

	/**
	 * Editar usuário ...
	 * @return [type] [description]
	 */
	public function editarempresa($id = null){
		// ...
		if($_SERVER['REQUEST_METHOD'] == "POST"){
			/* Validando os dados do formulário */
            $this->form_validation->set_rules('email', _t("e-mail"), 'required|trim|valid_email|callback_email_check');
            $this->form_validation->set_message('email_check', _t('O e-mail que você está tentando cadastrar já existe.'));
            /* Fazendo validação se a senha for enviada */
            if(isset($_POST['senha']) && !empty($_POST['senha'])){
	            $this->form_validation->set_rules('senha', _t("senha"), 'required|min_length[6]|trim');
	            $this->form_validation->set_rules('contrasenha', _t("confirmar senha"), 'required|min_length[6]|trim|matches[senha]');
            }
			/* Verificando se for validado, vamos inserir no banco de dados */
		 	if ($this->form_validation->run() == FALSE){
                $errors['msg'] = validation_errors();
                $this->session->set_flashdata('danger', $errors);
            } else {
            	$_POST = array_filter($_POST);
            	unset($_POST['contrasenha']);
            	if(isset($_POST['senha']) && !empty($_POST['senha'])) { $_POST['senha'] = password_hash($_POST['senha'], PASSWORD_DEFAULT); }
                if($this->users_model->editarEmpresa($this->input->post(), $this->uri->segment(3)) == TRUE){
                	$success = _t("O usuário foi cadastrado com sucesso e já pode começar a usar o sistema.");
                	$this->session->set_flashdata('success', $success);
                	redirect(base_url("superadmin/listarempresas"));
                } else {
                	$error = _t("Não foi possível cadastrar o usuário. Contate o administrador.");
                	$this->session->set_flashdata('danger', $error);
                	redirect(base_url("superadmin/listarempresas"));
                }
            }	
		}		

		/* Renderização do sistema de edição da empresa */
		if($id == false){
			$this->session->set_flashdata('danger', _t("Nenhum usuário selecionado."));
			redirect(base_url("superadmin/listarempresas"));
		} else {
			/* Renderizando a view depois de carregar os dados */
			$resultado = $this->users_model->getOneEmpresa($id);
			if($resultado->num_rows() == 1){
				$data['cad'] = $resultado->row();
				$this->load->loaderPage("superadmin/editar_empresas", $data);
			} else {
				$this->session->set_flashdata('danger', _t("Nenhum usuário selecionado."));
				redirect(base_url("superadmin/listarempresas"));
			}	
		}
	}

	/**
	 * Habilitar usuário no sistema
	 * @return [type] [description]
	 */
	public function habilitarempresas($id = null){
		// ...
		if($id == false){
			$this->session->set_flashdata('danger', _t("Nenhum usuário selecionado."));
			redirect(base_url("superadmin/listarempresas"));
		} else {
			if($this->users_model->habilitarEmpresa($id) == 1){
	        	$this->session->set_flashdata('success', _t("O usuário foi habilitado com sucesso."));
			} else {
	        	$this->session->set_flashdata('danger', _t("Não foi possível habilitar o usuário."));
			} redirect(base_url("superadmin/listarempresas"));
		}
	}	

	/**
	 * Desabilitar usuário no sistema
	 * @return [type] [description]
	 */	
	public function desabilitarempresa($id = null){
		// ...
		if($id == false){
			$this->session->set_flashdata('danger', _t("Nenhum usuário selecionado."));
			redirect(base_url("superadmin/listarempresas"));
		} else {
			if($this->users_model->desabilitarEmpresa($id) == 1){
	        	$this->session->set_flashdata('success', _t("O usuário foi desabilitado com sucesso."));
			} else {
	        	$this->session->set_flashdata('danger', _t("Não foi possível desabilitar o usuário."));
			} redirect(base_url("superadmin/listarempresas"));
		}
	}	

	/**
	 * Desabilitando totalmente empresa do sistema
	 * @return [type] [description]
	 */	
	public function deleteempresa($id = null){
		// ...
		if($id == false){
			$this->session->set_flashdata('danger', _t("Nenhum usuário selecionado."));
			redirect(base_url("superadmin/listarempresas"));
		} else {
			if($this->users_model->deleteEmpresa($id) == 1){
	        	$this->session->set_flashdata('success', _t("O usuário foi excluído com sucesso."));
			} else {
	        	$this->session->set_flashdata('danger', _t("Não foi possível excluir o usuário."));
			} redirect(base_url("superadmin/listarempresas"));
		}
	}

	/**
	 * Configurações de cada usuário no sistema ...
	 * @return [type] [description]
	 */
	public function configuracoes($id = null){

		// Tratar as configurações para registrar no banco de dados
		if($_SERVER['REQUEST_METHOD'] == "POST"){

            $this->form_validation->set_rules('smtp_from_name', _t("nome do rementente"), 'required|trim');
            $this->form_validation->set_rules('smtp_from_email', _t("e-mail do remetente"), 'required|trim');
            $this->form_validation->set_rules('smtp_reply', _t("responder para"), 'required|trim');
            $this->form_validation->set_rules('smtp_host', _t("hostname"), 'required|trim');
            $this->form_validation->set_rules('smtp_user', _t("usuário"), 'required|trim|valid_email');
            $this->form_validation->set_rules('smtp_email', _t("e-mail"), 'required|trim|valid_email');
            $this->form_validation->set_rules('smtp_port', _t("porta"), 'required|min_length[3]|trim');
            $this->form_validation->set_rules('stmp_senha', _t("senha"), 'required|min_length[6]|trim');
            $this->form_validation->set_rules('smtp_secure', _t("criptografia"), 'required|min_length[3]|trim');
            $this->form_validation->set_rules('stmp_csenha', _t("confirmar senha"), 'required|min_length[6]|trim|matches[stmp_senha]');

			/* Verificando se for validado, vamos inserir no banco de dados */
		 	if ($this->form_validation->run() == FALSE){
                $errors['msg'] = validation_errors();
                $this->session->set_flashdata('danger', $errors);
            } else {

				unset($_POST['stmp_csenha']);
				$_POST['cadastro'] = date("Y-m-d H:i:s");
				$_POST['empresa_id'] = $this->uri->segment(3);
				$_POST['stmp_senha'] = password_hash($_POST['stmp_senha'], PASSWORD_DEFAULT);

	            if($this->users_model->getConfiguracoes($_POST['empresa_id']) == 0){
					if($this->users_model->cadConfiguracoes($this->input->post()) == TRUE){
						$success = _t("As configurações para este usuário foram cadastradas com sucesso.");
						$this->session->set_flashdata('success', $success);
						redirect('superadmin/listarempresas');
					} else {
						$error = _t("Não foi possível cadastrar as configurações. Contate o administrador.");
						$this->session->set_flashdata('danger', $error);
					}
	            } else {
					if($this->users_model->updConfiguracoes($this->input->post(), $_POST['empresa_id']) == TRUE){
						$success = _t("As configurações para este usuário foram cadastradas com sucesso.");
						$this->session->set_flashdata('success', $success);
						redirect('superadmin/listarempresas');
					} else {
						$error = _t("Não foi possível cadastrar as configurações. Contate o administrador.");
						$this->session->set_flashdata('danger', $error);
					}
	            }
            }            
		}	

		// Renderizando a view do sistema
		if($id == false){
			$this->session->set_flashdata('danger', _t("Nenhum usuário selecionado."));
			redirect(base_url("superadmin/listarempresas"));
		} else {
			$data['info'] = $this->users_model->getConfiguracoesFromUser($this->uri->segment(3));
			$data['ver'] = $this->users_model->getConfiguracoes($this->uri->segment(3));
			$this->load->loaderPage("superadmin/configuracoes", $data);
		}
	}

	public function traducoes($id = null){
		// fazendo atualização do termo a ser traduzido
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			// guardando as variáveis do post
			$post['entrada'] = $this->input->post("entrada");
			$post['portuguese'] = $this->input->post("portuguese");
			$post['spanish'] = $this->input->post("spanish");
			$post['english'] = $this->input->post("english");
			$post['japanese'] = $this->input->post("japanese");
			$post['cadastro'] = date("Y-m-d H:i:s");
			$post['traduzido'] = 1;
			// form_validation
			$this->form_validation->set_rules('portuguese', 'do idioma português', 'required');
			$this->form_validation->set_rules('spanish', 'do idioma espanhol', 'required');
			$this->form_validation->set_rules('english', 'do idioma inglês', 'required');
			$this->form_validation->set_rules('japanese', 'do idioma japonês', 'required');
			// form_validation
			if($this->form_validation->run() == TRUE){
				$object = $post;
				unset($object['id']);
				$record = $this->db->where('id', $id)->update('traductions', $object);
				if($this->db->affected_rows() == 1){
					$this->session->set_flashdata('success', 'Termo foi traduzido com sucesso.');
				}
			} else {
				$errors = validation_errors();
				$this->session->set_flashdata('danger', $errors);
			}
		}
		
		// buscando o termo no banco de dados para tradução ...
		$exists = ((empty($id) OR $id == null) ? FALSE : TRUE);
		$existe = (($id) ? $this->db->where("id", $id)->get("traductions")->num_rows() : FALSE);
		$data['term'] = (($existe) ? $this->db->where("id", $id)->get("traductions")->row() : FALSE);

		// tentando montar uma paginação
		// $data['terms'] = $this->db->where("traduzido", 0)->get("traductions")->result();
		$data['terms'] = $this->db->get("traductions")->result();
		$Paginate = [];
		foreach ($data['terms'] as $key => $val){
			$Paginate[] = $val->id;
		} $data['pages'] = $this->traducoes_pagination($id, $Paginate);

		if($exists == FALSE){
			$this->session->set_flashdata('danger', _t('Nenhum termo foi carregado para tradução.'));
		} $this->load->loaderPage("superadmin/traducoes", $data);
	}

	/**
	 * É uma função de validação de formulário do framework Codeigniter
	 * que verifica se ó e-mail que está sendo enviado é do usuário e se
	 * não for e já tiver cadastrado no banco de dados, vai retornar um false.
	 * @return [type] [description]
	 */
	public function email_check(){
		// ...
		$post = $_POST;
		$id = $this->uri->segment(3);
		// Se o e-mail que ele digitar já existir no banco e não for dele, false, se for o dele true.
		if($this->users_model->compareEmailUser($post['email'], $id) == 1){
			return true;
		} elseif($this->users_model->compareEmailUserUniq($post['email']) == 1){
			return false;
		} else {
			return true;
		}
	}

	/**
	 * Paginação dos itens de tradução ...
	 * @param  [type] $id [description]
	 * @param  [type] $Paginate [description]
	 * @return [type] [description]
	 */
	private function traducoes_pagination($id, $Paginate){
		// ...
		$atual = array_search($id, $Paginate);
		$reg_atual = $Paginate[$atual];

		$anterior = ((array_search($id, $Paginate) > 0) ? ((array_search($id, $Paginate)-1)) : 0);
		$reg_anterior = $Paginate[$anterior];

		$ultimo = end($Paginate);
		$ultimo = key($Paginate);
		$reg_ultimo = $Paginate[$ultimo];

		$posterior = ((((array_search($id, $Paginate)+1)) < $ultimo) ? ((array_search($id, $Paginate)+1)) : $ultimo);
		$reg_posterior = $Paginate[$posterior];

		return [
			'atual' => $reg_atual,
			'anterior' => $reg_anterior,
			'posterior' => $reg_posterior,
			'ultimo' => $reg_ultimo
		];
	}
}

/* End of file Superadmin.php */
/* Location: ./application/controllers/Superadmin.php */