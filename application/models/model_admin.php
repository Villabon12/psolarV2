<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_admin extends CI_Model {

	function __construct()
	{
		parent ::__construct();
	}


	public function index()
	{
		$this->load->view('admin/view_dashboard');
	}
}
?>