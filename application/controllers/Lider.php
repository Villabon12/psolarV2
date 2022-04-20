<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lider extends CI_Controller {

	
	function __construct()
	{
		parent ::__construct();
		$this->load->model('model_lider');
	}

	//Ruta para el Login
	public function index()
	{
		$this->load->view('lider/view_dashboard');
	}
}
?>