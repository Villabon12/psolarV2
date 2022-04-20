<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_lider extends CI_Model {

	function __construct()
	{
		parent ::__construct();
	}


	public function index()
	{
		$this->load->view('lider/view_dashboard');
	}
}
?>