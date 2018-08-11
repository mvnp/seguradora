<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Customers_model extends CI_Model {

    /**
     * Cadastrar cliente
     * @param  [type] $post [description]
     * @return [type] [description]
     */
    public function cadastrando($post){
        // agrupando informações para armazenamento ...
        $post['cli_telefone'] = toAscii($post['cli_telefone'], ['delimiter'=>'']);
        $post['cli_cadastro'] = date("Y-m-d");
        $post['empresa_id'] = 1;
        $post['cli_funcao'] = 4; 
        // armazenamento
        $object = $post;
        $this->db->insert('users', $object);
        return $insert_id = $this->db->insert_id();
    }

    /**
     * Cadastrar endereço do cliente
     * @return [type] [description]
     */
    public function cadastrarendereco($client_id, $address){
        $object = $address;
        $object['users_id'] = $client_id;
        $object['end_cadastro'] = date("Y-m-d");
        $object['end_complemento'] = ((!empty($object['end_complemento'])) ? $object['end_complemento']: NULL);
        // armazenamento
        $this->db->insert('user_address', $object);
        return $insert_id = $this->db->insert_id();
    }

    /**
     * Buscando dados iniciais de cadastro de cada cliente
     * @param  [type] $id [description]
     * @return [type] [description]
     */
    public function getAllCadastroCliente($id){

        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('user_address', 'users.cli_id = user_address.users_id');
        $this->db->join('user_company', 'users.cli_id = user_company.users_id', 'left');
        $this->db->where('cli_id', $id);
        return $this->db->get()->row();
    }

    /**
     * Esta função está sendo usada para a callback myemail_check
     * @param  [type] $email [description]
     * @return [type] [description]
     */
    public function verifyUserEmail($email){
        $this->db->where('cli_email', $email);
        return $result = (($this->db->get('users')->num_rows() == 1) ? TRUE : FALSE);
    }

    /**
     * Esta função está sendo usada para a callback myemail_check
     * @param  [type] $email [description]
     * @return [type] [description]
     */
    public function verifyEmailSameUser($id, $email){
        $this->db->where('cli_id', $id);
        $this->db->where('cli_email', $email);
        return $result = (($this->db->get('users')->num_rows() == 1) ? TRUE : FALSE);
    }

    public function updatePessoais($id, $cliente){

        $object = $cliente;
        $this->db->where('cli_id', $id);
        $this->db->update('users', $object);
        // verficando se foi atualizado
        if($this->db->affected_rows() == 1){
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function updateEndereco($id, $endereco){

        $object = $endereco;
        $this->db->where('users_id', $id);
        $this->db->update('user_address', $object);
        // verficando se foi atualizado
        if($this->db->affected_rows() == 1){
            return TRUE;
        } else {
            return FALSE;  
        }
    }

    public function updateCompany($id, $company){

        $object = $company;
        $this->db->where('users_id', $id);
        $this->db->update('user_company', $object);
        // verficando se foi atualizado
        if($this->db->affected_rows() == 1){
            return TRUE;
        } else {
            return FALSE;  
        }
    }

    public function ajaxGetAllCustomers(){

        $this->datatables->select('*');
        $this->datatables->from('users');
        return $result = $this->datatables->generate();
    }

    /**
     * Ajax Example para modificar as informações do Datatable
     * @return [type] [description]
     *
    public function ajaxExample(){

        $this->datatables->select('*');
        $this->datatables->from('users');
        $result = json_decode($this->datatables->generate());
        $data = $result->data;
        unset($result->data);
        foreach($data as $chave => $valor){
            $valor->ID = getnamebyid($valor->ID);
            $valor->PERIODICIDADE = "MENSAL";
            $valor->EFICAZ_TAB_MES_ANO = DBtoData($valor->EFICAZ_TAB_MES_ANO);
            $valor->EFICAZ_TAB_ID = str_pad($valor->EFICAZ_TAB_ID, 4, 0, STR_PAD_LEFT);
            $valor->EFICAZ_TAB_ITEM_ID = getThreeLetters(getItemDesr($valor->EFICAZ_TAB_ITEM_ID));
            $valor->EFICAZ_TAB_DT_CADASTRO = date("d/m/Y H:i:s", strtotime($valor->EFICAZ_TAB_DT_CADASTRO));
            $result->data[$chave] = $valor;
        } return $result = json_encode($result);        
    }
    */
}

/* End of file Customers_model.php */
/* Location: ./application/models/Customers_model.php */