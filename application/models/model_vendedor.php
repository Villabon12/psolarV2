<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_vendedor extends CI_Model {

	function __construct()
	{
		parent ::__construct();
	}


	public function index()
	{
		$this->load->view('vendedor/view_dashboard');
	}
}
?>