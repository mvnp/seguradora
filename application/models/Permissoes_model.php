<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Permissoes_model extends MY_Model {

    protected $table = "routes";
    protected $primary_key = "id";
    protected $table_group = "route_groups";
    protected $table_methods = "route_methods";
    protected $table_usergroups = "route_usergroup";

	/**
	 * Cadastra uma nova empresa ...
	 * @return [type] [description]
	 */
	public function getAllAtivos(){

		$this->db->select('*');
        $this->db->from($this->table_group);
        // $this->db->where('status', 1);
        $this->db->order_by('nome', 'asc');
        return $this->db->get();
	}

    /**
     * Buscando controllers para listar os pontos de acesso do sistema
     * @return [type] [description]
     */
    public function getAllPrivatedControllers(){

        $this->db->select('class');
        $this->db->from('routes');
        $this->db->where('private', 1);
        $this->db->where('status', 1);
        $this->db->group_by('class');
        $this->db->order_by('class', 'asc');

        return $result = $this->db->get();
    }

    /**
     * Pegando todas as views de cada controller 
     * @param  [type] $controller [description]
     * @return [type] [description]
     */
    public function getAllPermissoesForController($controller){

        $this->db->select('*');
        $this->db->from('routes');
        $this->db->where('private', 1);
        $this->db->where('status', 1);
        $this->db->where('class', $controller);
        $this->db->order_by('method', 'asc');

        return $result = $this->db->get();
    }

    /**
     * Cadastrando grupo de funções do sistema.
     * @param  [type] $post [description]
     * @return [type] [description]
     */
    public function cadastrargrupo($post){

        $object = [
            "nome" => $post['nome'],
            "description" => $post['description'],
            "status" => $post['status'],
            "cadastro" => $post['cadastro'],
        ]; $this->db->insert('route_groups', $object);
        
        if(!empty($this->db->insert_id())){
            if($this->cadastrar_funcoes_grupos($this->db->insert_id(), $post['permissions']) == 1){
                return true;
            } else {
                return false;
            }
        }
    }

    /**
     * [getAllForThisGroup description]
     * @param  [type] $id [description]
     * @return [type] [description]
     */
    public function getAllForThisGroup($id){

        $this->db->select('*');
        $this->db->from('route_groups');
        $this->db->where('id', $id);
        return $this->db->get()->row_array();     
    }

    /**
     * Pegando todos os métodos desse grupo ...
     * @param  [type] $id [description]
     * @return [type] [description]
     */
    public function getAllMethodsForGroup($id){

        $this->db->select('*');
        $this->db->from('route_methods');
        $this->db->where('groups_id', $id);
        return $this->db->get()->result_array();
    }

    /**
     * Inserindo todas as permissões desse grupo de usuários no banco de dados ....
     * @param  [type] $last_id [description]
     * @param  [type] $perm [description]
     * @return [type] [description]
     */
    private function cadastrar_funcoes_grupos($last_id, $permssion){

        foreach ($permssion as $perm) {
            $object = [
                "status" => 1,
                "groups_id" => $last_id,
                "method_id" => $perm,
                "cadastro" => date("Y-m-d H:i:s")
            ]; $this->db->insert('route_methods', $object);
        } return $this->db->affected_rows();
    }
}

/* End of file Permissoes_model.php */
/* Location: ./application/models/Permissoes_model.php */