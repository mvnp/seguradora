<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Administrativo extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('customers_model');  
	}

	/**
	 * Redirecionamento
	 * @return [type] [description]
	 */
	public function index(){
		redirect(base_url("administrativo/lista"), 'refresh');
	}

	/**
	 * Alimentado via Ajax lista de clientes
	 * @return [type] [description]
	 */
	public function lista(){
		$data = null;
		$this->load->loaderPage("usuarios/clientes_lista");
	}

	public function ajaxGetAllCustomers(){
		// buscando todos os usuários do sistema
		// if($_SERVER['REQUEST_METHOD'] !== "POST") exit;
		// alimentando os dados na datatable ...
        header('Content-Type: application/json');
        echo $this->customers_model->ajaxGetAllCustomers();
	}

	/**
	 * Inserindo um novo cliente no banco de dados
	 * @return [type] [description]
	 */
	public function cadastra(){
		// form
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			// empresa_id, funcao, cadastro - primeira parte do formulário
			$this->form_validation->set_rules('cli_nome', 'nome', 'required');
			$this->form_validation->set_rules('cli_sobrenome', 'sobrenome', 'required');
			$this->form_validation->set_rules('cli_telefone', 'telefone', 'required');
			$this->form_validation->set_rules('cli_password', 'password', 'required');
			$this->form_validation->set_rules('cli_status', 'status', 'required');
			$this->form_validation->set_rules('cli_dependente', 'dependente', 'required');
			$this->form_validation->set_rules('cli_email', 'email', 'required|valid_email|is_unique[users.cli_email]');
			// segunda parte do formulário
			$this->form_validation->set_rules('end_cep', 'cep', 'required');
			$this->form_validation->set_rules('end_rua', 'rua', 'required');
			$this->form_validation->set_rules('end_numero', 'numero', 'required');
			$this->form_validation->set_rules('end_bairro', 'bairro', 'required');
			$this->form_validation->set_rules('end_cidade', 'cidade', 'required');
			$this->form_validation->set_rules('end_estado', 'estado', 'required');
			$this->form_validation->set_rules('end_pais', 'pais', 'required');
			// validação
			if($this->form_validation->run() == TRUE){
				// dados
				$data = [
					'cli_nome' => $this->input->post("cli_nome"),
					'cli_sobrenome' => $this->input->post("cli_sobrenome"),
					'cli_telefone' => $this->input->post("cli_telefone"),
					'cli_password' => $this->input->post("cli_password"),
					'cli_status' => $this->input->post("cli_status"),
					'cli_dependente' => $this->input->post("cli_dependente"),
					'cli_email' => $this->input->post("cli_email")
				];
				// inserção
				$insert_id = $this->customers_model->cadastrando($data);
				if(is_int($insert_id) && is_numeric($insert_id)){
					// inserir endereço
					$post = $this->input->post();
					$address = [
						'end_cep' => $this->input->post("end_cep"),
						'end_rua' => $this->input->post("end_rua"),
						'end_numero' => $this->input->post("end_numero"),
						'end_complemento' => $this->input->post("end_complemento"),
						'end_bairro' => $this->input->post("end_bairro"),
						'end_cidade' => $this->input->post("end_cidade"),
						'end_estado' => $this->input->post("end_estado"),
						'end_latitude' => $this->input->post("end_latitude"),
						'end_longitude' => $this->input->post("end_longitude"),
						'end_pais' => $this->input->post("end_pais")
					];
					// verifica se inseriu cadastro e começa a inserir endereço
					$address_insert_id = $this->customers_model->cadastrarendereco($insert_id, $address);
					if(is_int($address_insert_id) && is_numeric($address_insert_id)){
						// cadastrando dados da empresa
						$empresa = array_filter([
				    		// 'users_id' => $insert_id,
				    		'cpy_nome' => $this->input->post("cpy_nome"),
				    		'cpy_cep' => $this->input->post("cpy_cep"),
				    		'cpy_endereco' => $this->input->post("cpy_endereco"),
				    		'cpy_numero' => $this->input->post("cpy_numero"),
				    		'cpy_bairro' => $this->input->post("cpy_bairro"),
				    		'cpy_complemento' => $this->input->post("cpy_complemento"),
				    		'cpy_cidade' => $this->input->post("cpy_cidade"),
				    		'cpy_estado' => $this->input->post("cpy_estado"),
				    		'cpy_telefone' => $this->input->post("cpy_telefone"),
						]); 

						// verifica se o array está vazio e senão, insere os dados de empresa no usuário
						if(count($empresa) !== 0){
							$empresa['users_id'] = $insert_id;
							$empresa['cpy_cadastro'] = date("Y-m-d");
							$cadastra = $this->db->insert('user_company', $empresa);
						} 

						// termina o script e volta para a tela de cadastro vazia
						$this->session->set_flashdata('success', 'O cliente foi cadastrado com sucesso.');
						redirect(base_url('administrativo/cadastra'));

					} else {
						$this->session->set_flashdata('danger', 'Não foi possível cadastrar o endereço do cliente.');
					}
				} else {
					$errors = validation_errors();
					$this->session->set_flashdata('danger', $errors);
				}
			} else {
				$errors = validation_errors();
				$this->session->set_flashdata('danger', $errors);
			} // redirect(base_url('customers/cadastra'), 'refresh');			
		} 
		// renderizando a view do cadastrar cliente
		$this->load->loaderPage("usuarios/clientes_cadastra");
	}

	/**
	 * Editando os campos do cadastro do cliente
	 * @return [type] [description]
	 */
	public function edita($id){

		// verifica se o registro existe no banco de dados
		if($this->verificaExists('cli_id', 'users', $id) == false){
			redirect(base_url("administrativo/lista"));
		}

		// form
		if($_SERVER['REQUEST_METHOD'] === 'POST'){

			// armazenando dados 
			$cliente = array_filter($this->input->post("cli"));
			$endereco = array_filter($this->input->post("end"));
			$company = array_filter($this->input->post("cpy"));

			// empresa_id, funcao, cadastro - primeira parte do formulário
			$this->form_validation->set_rules('cli[cli_nome]', 'nome', 'required');
			$this->form_validation->set_rules('cli[cli_sobrenome]', 'sobrenome', 'required');
			$this->form_validation->set_rules('cli[cli_telefone]', 'telefone', 'required');
			$this->form_validation->set_rules('cli[cli_password]', 'password', 'required');
			$this->form_validation->set_rules('cli[cli_status]', 'status', 'required');
			$this->form_validation->set_rules('cli[cli_dependente]', 'dependente', 'required');
			$this->form_validation->set_rules('cli[cli_email]', 'email', 'required|valid_email|callback_myemail_check');
			
			// segunda parte do formulário
			$this->form_validation->set_rules('end[end_cep]', 'cep', 'required');
			$this->form_validation->set_rules('end[end_rua]', 'rua', 'required');
			$this->form_validation->set_rules('end[end_numero]', 'numero', 'required');
			$this->form_validation->set_rules('end[end_bairro]', 'bairro', 'required');
			$this->form_validation->set_rules('end[end_cidade]', 'cidade', 'required');
			$this->form_validation->set_rules('end[end_estado]', 'estado', 'required');
			$this->form_validation->set_rules('end[end_pais]', 'pais', 'required');
			// validação
			if($this->form_validation->run() == TRUE){
				// fazendo update dos dados na base de dados
				$atualizacao = 0;
				if($this->customers_model->updatePessoais($id, $cliente) != TRUE){ $atualizacao++; }
				if($this->customers_model->updateEndereco($id, $endereco) != TRUE){ $atualizacao++; }
				if($this->customers_model->updateCompany($id, $company) != TRUE){ $atualizacao++; }
				// verificando se existe erro
				if($atualizacao > 0){
					$this->session->set_flashdata('success', 'O cliente foi atualizado com sucesso.');
				} else {
					$this->session->set_flashdata('danger', 'Nenhum dado foi atualizado.');
				}
			} else {
				$errors = validation_errors();
				$this->session->set_flashdata('danger', $errors);					
			}
		}
		// renderizando a view do cadastrar cliente
		$data['cust'] = $this->customers_model->getAllCadastroCliente($id);
		$this->load->loaderPage("usuarios/clientes_edita", $data);
	}

	/**
	 * Editando os campos do cadastro do cliente
	 * @return [type] [description]
	 */
	public function consulta($id){

		// verifica se o registro existe no banco de dados
		if($this->verificaExists('cli_id', 'users', $id) == false){
			redirect(base_url("administrativo/lista"));
		}

		// renderizando a view do cadastrar cliente
		$data['cust'] = $this->customers_model->getAllCadastroCliente($id);
		$this->load->loaderPage("usuarios/clientes_consulta", $data);
	}	

	/**
	 * [email_check description]
	 * @return [type] [description]
	 */
	public function myemail_check(){
		// callback
		$id = $this->uri->segment(3);
		$email = $this->input->post('cli[cli_email]');
		$verifica = $this->customers_model->verifyUserEmail($id, $email);
		// se este email existe na base de dados, fazer outra verificação
		if($this->customers_model->verifyUserEmail($email) == TRUE){
			if($this->customers_model->verifyEmailSameUser($id, $email) == TRUE){
		        return TRUE;
		    } else {
				$this->form_validation->set_message('myemail_check', 'Este e-mail já está sendo usando nessa base de dados.');
				return FALSE;
		    }
		}
	}	

	/**
	 * Retorna coordenadas do cep do cliente via Ajax
	 * @return [type] [description]
	 */
	public function getCoordinates(){

		// pegando todos os dados para montar o endereço
		$address 	= ((isset($_POST['zipcode']) && !empty($_POST['zipcode']))  ? str_replace("-", "", $_POST['zipcode'].",") : "");
		$address 	.= ((isset($_POST['rua']) && !empty($_POST['rua'])) 	  	? $_POST['rua'].","    : "");
		$address 	.= ((isset($_POST['numero']) && !empty($_POST['numero'])) 	? $_POST['numero']."," : "");
		$address 	.= ((isset($_POST['bairro']) && !empty($_POST['bairro'])) 	? $_POST['bairro']."," : "");
		$address 	.= ((isset($_POST['cidade']) && !empty($_POST['cidade'])) 	? $_POST['cidade']."," : "");
		$address 	.= ((isset($_POST['estado']) && !empty($_POST['estado'])) 	? $_POST['estado']."," : "");
		$address 	.= "JAPAN";
		// get coordinates
		$prepAddr 	= str_replace(' ', '+', $address);
		$geocode 	= file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
		$output 	= json_decode($geocode);
		$latitude 	= $output->results[0]->geometry->location->lat;
		$longitude 	= $output->results[0]->geometry->location->lng;
		// coordinates
		$coordinates = [
			'latitude' => $latitude,
			'longitude' => $longitude,
			'address' => $prepAddr
		]; echo json_encode($coordinates);
	}

	/**
	 * [apaga description]
	 * @return [type] [description]
	 */
	public function apaga($id){

		// verifica se o registro existe no banco de dados
		if($this->verificaExists('cli_id', 'users', $id) == false){
			redirect(base_url("administrativo/lista"));
		}
			

		$this->db->trans_start();
		$this->db->where('cli_id', $id);
			$this->db->delete('users');
		$this->db->trans_complete();

		if ($this->db->trans_status() === TRUE){
			$this->session->set_flashdata('success', 'O usuário foi excluído com sucesso da base de dados.');
		} redirect(base_url("customers/lista"));
	}

	/**
	 * Verifica se o registro existe
	 * @param  [type] $pr_key [description]
	 * @param  [type] $table  [description]
	 * @param  [type] $id [description]
	 */
	private function verificaExists($pr_key, $table, $id = null){
		// verifica se usuário existe no banco de dados
		if(is_null($id) OR !$this->db->where($pr_key, $id)->get($table)->num_rows() == 1){
			return false;
		} else {
			return true;
		}
	}
}

/* End of file Customers.php */
/* Location: ./application/controllers/Customers.php */