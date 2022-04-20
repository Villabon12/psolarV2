<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	function __construct()
	{
		parent ::__construct();
		$this->load->model('model_admin');
	}

	//Ruta para el Login
	public function index()
	{
		$this->load->view('admin/view_dashboard');
	}
}
?>