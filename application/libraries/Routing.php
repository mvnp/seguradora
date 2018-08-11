<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Routing {

	protected $CI;

	/**
	 * Carregando parametros ...
	 * @param [type] $params [description]
	 */
	public function __construct($params = null){

		$this->CI =& get_instance();
		$this->CI->load->model('routes_model');
		$this->registerRoutes();
	}

	/**
	 * Escrevendo o router ...
	 * @param  [type] $description [description]
	 * @return [type] [description]
	 */
    private function registerRoutes(){
    	
		// Registro de rotas dentro do sistema ...
		$data['description'] = ((isset($description)) ? $description : "Aguardando ...");
		$data['private'] = ((isset($private)) ? $private : 1);
		$data['status'] = 1;
		$data['class'] = strtolower(trim($this->CI->router->fetch_class()));
		$data['method'] = strtolower(trim($this->CI->router->fetch_method()));
		$data['cadastro'] = date("Y-m-d H:i:s");
		// Verifica e insere ...
		$verifica = $this->CI->routes_model->searchRounting($data);
		$cadastra = (($verifica == 0) ? $this->CI->routes_model->insertRota($data) : true);
	}
}

/* End of file Routing.php */
/* Location: ./application/libraries/Routing.php */