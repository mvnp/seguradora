<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		redirect('dashboard/inicio', 'refresh');
	}	

	/**
	 * Todos os clientes que desejam aderir ao seguro
	 * @return [type] [description]
	 */
	public function inicio(){
		$data = null;
		$this->load->loaderPage("dashboard/inicio", $data);
	}
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */