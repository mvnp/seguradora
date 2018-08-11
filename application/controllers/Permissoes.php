<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Permissoes extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}	

	/**
	 * Listando grupos presentes no sistema ...
	 * @return [type] [description]
	 */
	public function listargrupos(){

		#####################################################################################################################################
		$register = $this->routing->register_route(_t("Permite a listagem de grupos de acessos com funções específicas a cada usuário."), 1);
		#####################################################################################################################################

		$data['group'] = $this->permissoes_model->getAllAtivos();
		$this->load->loaderPage('permissoes/listar_grupos', $data);
	}

	/**
	 * Cadastrando um grupo de permissoes ...
	 * @return [type] [description]
	 */
	public function cadastrargrupo(){

		#####################################################################################################################################
		$register = $this->routing->register_route(_t("Permite o cadastro de grupos de acessos com funções específicas a cada usuário."), 1);
		#####################################################################################################################################
		#
		if($_SERVER['REQUEST_METHOD'] == "POST"){

			$_POST['status'] = 1;
			$_POST['cadastro'] = date("Y-m-d H:i:s");
			if(empty($this->input->post("permissions"))){
				$this->session->set_flashdata('danger', 'Nenhuma funcionalidade foi selecionada.');
			} else {
	            $this->form_validation->set_rules('nome', _t("nome do grupo"), 'required|trim|min_length[6]');
	            $this->form_validation->set_rules('description', _t("descrição do grupo"), 'required|trim|min_length[25]');
	            $this->form_validation->set_message('description', 'Error Message');
	            // registrando as permissoes na sessão pra resgatar no form ...
	            $form_selects = array(
			 		'form_selects' => $_POST['permissions']
			 	); $this->session->set_userdata( $form_selects );
	            // fazendo verificação do formulário de cadastro das permissoes ...
			 	if ($this->form_validation->run() == FALSE){
	                $errors['msg'] = validation_errors();
	                $this->session->set_flashdata('danger', $errors);
	            } else {
	            	// cadastrar grupo
	            	if($this->permissoes_model->cadastrargrupo($this->input->post()) == TRUE){
	            		$this->session->set_flashdata('success', _t("O grupo foi cadastrado com sucesso e está pronto para uso."));
	            		$this->session->unset_userdata( 'form_selects' );
	            		redirect(base_url("permissoes/listargrupos"));
	            	} else {
	            		$this->session->set_flashdata('danger', _t("Não foi possível cadastrar o grupo, contate o administrador."));
	            	}
	            }          
			}
		}
		
		$data['contr'] = $this->permissoes_model->getAllPrivatedControllers();
		$this->load->loaderPage('permissoes/cadastrar_grupos', $data);
	}

	/**
	 * Editando um grupo de permissoes ...
	 * @return [type] [description]
	 */
	public function editargrupo($id = null){

		#####################################################################################################################################
		$register = $this->routing->register_route(_t("Permite a edição de grupos de acessos com funções específicas a cada usuário."), 1);
		#####################################################################################################################################
		#
		if($_SERVER['REQUEST_METHOD'] == "POST"){

			$_POST['status'] = 1;
			$_POST['cadastro'] = date("Y-m-d H:i:s");
			if(empty($this->input->post("permissions"))){
				$this->session->set_flashdata('danger', 'Nenhuma funcionalidade foi selecionada.');
			} else {
	            $this->form_validation->set_rules('nome', _t("nome do grupo"), 'required|trim|min_length[6]');
	            $this->form_validation->set_rules('description', _t("descrição do grupo"), 'required|trim|min_length[25]');
	            $this->form_validation->set_message('description', 'Error Message');
	            // registrando as permissoes na sessão pra resgatar no form ...
	            $form_selects = array(
			 		'form_selects' => $_POST['permissions']
			 	); $this->session->set_userdata( $form_selects );
	            // fazendo verificação do formulário de cadastro das permissoes ...
			 	if ($this->form_validation->run() == FALSE){
	                $errors['msg'] = validation_errors();
	                $this->session->set_flashdata('danger', $errors);
	            } else {
	            	// cadastrar grupo
	            	if($this->permissoes_model->cadastrargrupo($this->input->post()) == TRUE){
	            		$this->session->set_flashdata('success', _t("O grupo foi editado com sucesso e está pronto para uso."));
	            		$this->session->unset_userdata( 'form_selects' );
	            		redirect(base_url("permissoes/listargrupos"));
	            	} else {
	            		$this->session->set_flashdata('danger', _t("Não foi possível editadar o grupo, contate o administrador."));	
	            	}
	            }          
			}
		}
		// renderizando se houver um id ...
		if($id == false){
			$this->session->set_flashdata('danger', _t("Nenhum grupo foi selecionado."));
			redirect(base_url("permissoes/listargrupos"));
		} else {
			
			$data['descr'] = $this->permissoes_model->getAllForThisGroup($id);
			$data['habilit'] = getDataInForeach($this->permissoes_model->getAllMethodsForGroup($id), 'method_id');
			$data['contr'] = $this->permissoes_model->getAllPrivatedControllers();
			$this->load->loaderPage('permissoes/cadastrar_grupos', $data);
		}
	}
}

/* End of file Permissoes.php */
/* Location: ./application/controllers/Permissoes.php */