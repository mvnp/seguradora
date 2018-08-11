<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index(){
		$data = null;
		$this->load->frontend('site/home', $data);
	}

	public function contato(){
		$data = null;
		$this->load->contato('site/contato', $data);
	}

	public function faqs(){
		$data = null;
		$this->load->faqs('site/faqs', $data);
	}

	public function login(){
		$data = null;
		$this->load->login('site/login', $data);
	}

	public function sos(){
		redirect(base_url(), 'refresh');
	}

	public function contratar(){
		redirect(base_url(), 'refresh');
	}

	public function quemsomos(){
		redirect(base_url(), 'refresh');
	}
}

/* End of file Site.php */
/* Location: ./application/controllers/Site.php */