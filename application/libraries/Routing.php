<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Routing {

	protected $CI;

	/**
	 * Carregando parametros ...
	 * @param [type] $params [description]
	 */
	public function __construct($params = null){
		$this->CI =& get_instance();
	}

	/**
	 * Escrevendo o router ...
	 * @param  [type] $description [description]
	 * @return [type] [description]
	 */
    public function register_route($description, $private){

		$data['description'] = $description;
		$data['private'] = $private;
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