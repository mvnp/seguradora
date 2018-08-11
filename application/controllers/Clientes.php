<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	/**
	 * Carregando o __construct()
	 */
	public function __construct(){
		parent::__construct(); 
	}

	/**
	 * Redirecionamento
	 * @return [type] [description]
	 */
	public function index(){
		redirect('clientes/leads', 'refresh');
	}

	/**
	 * Todos os clientes que desejam aderir ao seguro
	 * @return [type] [description]
	 */
	public function leads(){
		$data = null;
		$this->load->loaderPage("clientes/leads", $data);
	}

	/**
	 * Todos os clientes que desejam aderir ao seguro
	 * @return [type] [description]
	 */
	public function efetivos(){
		$data = null;
		$this->load->loaderPage("clientes/efetivos", $data);
	}

	/**
	 * Todos os clientes que desejam aderir ao seguro
	 * @return [type] [description]
	 */
	public function bloqueados(){
		$data = null;
		$this->load->loaderPage("clientes/bloqueados", $data);
	}

	/**
	 * Alimentado via Ajax lista de clientes
	 * @return [type] [description]
	 */
	public function gestao(){
		$data = null;
		$this->load->loaderPage("clientes/gestao");
	}

	public function ajaxGetAllCustomers(){
		// buscando todos os usuários do sistema
		// if($_SERVER['REQUEST_METHOD'] !== "POST") exit;
		// alimentando os dados na datatable ...
        header('Content-Type: application/json');
        echo $this->customers_model->ajaxGetAllCustomers();
	}
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */