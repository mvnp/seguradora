<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends MY_Model {

	protected $table = "users";
	protected $primary_key = "id";
	protected $administracao = "admin_empresa";

	/**
	 * Cadastra uma nova empresa ...
	 * @return [type] [description]
	 */
	public function novaEmpresa($object){
		return $this->db->insert('admin_empresa', $object);
	}

   /**
     * Buscando todos os resultados ativos em ordem descrecente ...
     * @return [type] [description]
     */
    public function getAllUsers(){

        $this->db->select('*');
        $this->db->from("admin_empresa");
        $this->db->where('status <>', 2);
        $this->db->order_by("id", 'desc');

        return $this->db->get();
    }   

    /**
     * Buscando todos os resultados ativos em ordem descrecente ...
     * @return [type] [description]
     */
    public function getAllUsersAtivos(){

        $this->db->select('*');
        $this->db->from("admin_empresa");
        $this->db->where('status', 1);
        $this->db->order_by("id", 'desc');

        return $this->db->get();
    }

    /**
     * Habilitar empresa
     * @param  [type] $id [description]
     * @return [type] [description]
     */
    public function habilitarEmpresa($id){

    	$status = ["status" => 1];
    	$this->db->where('id', $id);
    	$this->db->update($this->administracao, $status);
    	return $this->db->affected_rows();
    } 

    /**
     * Edita os dados do usuário inicial do sistema ...
     * @param  [type] $post [description]
     * @param  [type] $id [description]
     * @return [type] [description]
     */
    public function editarEmpresa($object, $id){

    	$this->db->where($this->primary_key, $id);
    	$this->db->update($this->administracao, $object);
    	return $this->db->affected_rows();
    }  

     /**
     * Habilitar empresa
     * @param  [type] $id [description]
     * @return [type] [description]
     */
    public function desabilitarEmpresa($id){

    	$status = ["status" => 0];
    	$this->db->where('id', $id);
    	$this->db->update($this->administracao, $status);
    	return $this->db->affected_rows();
    }

    /**
     * Desabilitar empresa ...
     * @param  [type] $id [description]
     * @return [type] [description]
     */
    public function deleteEmpresa($id){

        $status = ["status" => 2];
        $this->db->where("id", $id);
        $this->db->update($this->administracao, $status);
        return $this->db->affected_rows();
    }

    /**
     * Pegando os dados iniciais da empresa
     * @param  [type] $id [description]
     * @return [type] [description]
     */
    public function getOneEmpresa($id){

    	$this->db->where($this->primary_key, $id);
    	return $this->db->get($this->administracao);
    }

	public function compareEmailUser($email, $id){

		$this->db->where('email', $email);
		$this->db->where($this->primary_key, $id);
		return $this->db->get($this->administracao)->num_rows();
	} 

	public function compareEmailUserUniq($email){

		$this->db->where('email', $email);
		return $this->db->get($this->administracao)->num_rows();
	}  

    /**
     * Retorna a quantidade de configurações para cada usuário
     * @param  [type] $empresa [description]
     * @return [type] [description]
     */
    public function getConfiguracoes($empresa){

        $this->db->where('empresa_id', $empresa);
        return $this->db->get('admin_configs')->num_rows();
    }

    /**
     * Retorna a quantidade de configurações para cada usuário
     * @param  [type] $empresa [description]
     * @return [type] [description]
     */
    public function getConfiguracoesFromUser($empresa){

        $this->db->where('empresa_id', $empresa);
        return $this->db->get('admin_configs')->row();
    }    

    /**
     * Cadastrando configurações do usuário no banco de dados
     * @return [type] [description]
     */
    public function cadConfiguracoes($configs){
        return $this->db->insert('admin_configs', $configs);
    }

    /**
     * Atualizando as configurações de e-mail do cliente
     * @param  [type] $post [description]
     * @param  [type] $empresa [description]
     * @return [type] [description]
     */
    public function updConfiguracoes($post, $empresa){

        $this->db->where('empresa_id', $empresa);
        return $this->db->update('admin_configs', $post);
    }
}

/* End of file Users_model.php */
/* Location: ./application/models/Users_model.php */