<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendedor extends CI_Controller {

	
	function __construct()
	{
		parent ::__construct();
		$this->load->model('model_login');
		$this->load->model('model_vendedor');
	}

	//Ruta para el Login
	public function index()
	{
		if($this->session->userdata('is_logged_in')){
		$this->load->view('vendedor/view_dashboard');
		}else{
			redirect(base_url()."index.php/inicio");
		}
	}
}
?>