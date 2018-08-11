<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Loader extends CI_Loader {

    public function loaderPage($views, $data = []){

       $this->view("incs/header",              $data);
       $this->view("incs/top",                 $data);
       $this->view("incs/sidebar-left",        $data);
       $this->view("incs/content-top",         $data);
       $this->view($views,                     $data);
       $this->view("incs/sidebar-right",       $data);
       $this->view("incs/footer",              $data);
    }

    /**
     * Disparando as mensagens de erro no sistema ...
     * @param  [type] $views [description]
     * @param  array $data [description]
     * @return [type] [description]
     */
    public function messages($views, $data = []){
       $this->view("incs/messages", $data);
    }

    /**
     * Carrega os arquivos para formar o layout do website
     * @param  [type] $views [description]
     * @param  array  $data  [description]
     * @return [type] [description]
     */
    public function frontend($views, $data = []){

       $this->view("site/includes/header",      $data);
       $this->view("site/includes/menu",        $data);
       $this->view("site/includes/slider",      $data);
       $this->view("site/includes/introducao",  $data);
       $this->view($views,                      $data);
       # $this->view("site/includes/comments",    $data);
       # $this->view("site/includes/prices",      $data);       
       $this->view("site/includes/parceiros",   $data);
       $this->view("site/includes/footer",      $data);
    }

    /**
     * Carrega os arquivos para formar o layout do website
     * @param  [type] $views [description]
     * @param  array  $data  [description]
     * @return [type] [description]
     */
    public function contato($views, $data = []){

       $this->view("site/includes/header",      $data);
       $this->view("site/includes/menu",        $data);
       $this->view("site/includes/google-maps", $data);
       $this->view($views,                      $data);
       $this->view("site/includes/footer",      $data);
    }

    /**
     * Carrega os arquivos para formar o layout do website
     * @param  [type] $views [description]
     * @param  array  $data  [description]
     * @return [type] [description]
     */
    public function basic($views, $data = []){

       $this->view("site/includes/header",      $data);
       $this->view("site/includes/menu",        $data);
       $this->view("site/includes/slider",      $data);
       $this->view("site/includes/introducao",  $data);
       $this->view($views,                      $data);
       $this->view("site/includes/parceiros",   $data);
       $this->view("site/includes/footer",      $data);
    }

    /**
     * Carrega os arquivos para formar o layout do website
     * @param  [type] $views [description]
     * @param  array  $data  [description]
     * @return [type] [description]
     */
    public function login($views, $data = []){

       $this->view("site/includes/header",      $data);
       $this->view("site/includes/menu",        $data);
       $this->view("site/includes/introducao",  $data);
       $this->view($views,                      $data);
       $this->view("site/includes/footer",      $data);
    }    

    /**
     * Carrega os arquivos para formar o layout do website
     * @param  [type] $views [description]
     * @param  array  $data  [description]
     * @return [type] [description]
     */
    public function faqs($views, $data = []){

       $this->view("site/includes/header",      $data);
       $this->view("site/includes/menu",        $data);
       $this->view("site/includes/introducao",  $data);
       $this->view($views,                      $data);
       $this->view("site/includes/parceiros",   $data);
       $this->view("site/includes/footer",      $data);
    }    
}

/* End of file MY_Loader.php */
/* Location: ./application/core/MY_Loader.php */