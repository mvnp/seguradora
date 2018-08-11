<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Traductions_model extends CI_Model {

    protected $table = "traductions";

    public function __construct(){
        parent::__construct();
    }

    /**
     * Buscando o termo que está tentando inserir na tabela
     * @param  [type] $texto [description]
     * @return [type] [description]
     */
    public function exists_string($texto){

        $this->db->select('entrada');
        $this->db->from($this->table);
        $this->db->where('entrada', $texto);
        $resultado = $this->db->get()->row();

        if($resultado->entrada !== $texto){
            $cadastrar = $this->cadastrar($texto);
        } else {
            return TRUE;
        }
    }

    /**
     * Cadastro dos temos no banco de dados 
     * @param  [type] $data [description]
     * @return [type] [description]
     */
    private function cadastrar($texto){
        
        $entrada = [
            "entrada" => $texto,
            "portuguese" => $texto,
            "spanish" => $texto,
            "english" => $texto,
            "japanese" => $texto,
            "cadastro" => date("Y-m-d H:i:s")
        ]; $this->db->insert($this->table, $entrada);
    }
}

/* End of file Traductions_model.php */
/* Location: ./application/models/Traductions_model.php */