<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Routes_model extends MY_Model {

	protected $table = "routes";
	protected $primary_key = "id";

	/**
	 * Conta para verificar se o route já está cadastrado ...
	 * @param  [type] $params [description]
	 * @return [type] [description]
	 */
	public function searchRounting($params){

		$this->db->where('class', $params['class']);
		$this->db->where('method', $params['method']);
		return $this->db->get($this->table)->num_rows();
	}

	/**
	 * Insere o rounting no banco de dados ...
	 * @param [type] $data [description]
	 */
	public function insertRota($params){
		return $this->db->insert($this->table, $params);
	}
}

/* End of file Routes_model.php */
/* Location: ./application/models/Routes_model.php */