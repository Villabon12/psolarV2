<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_inicio extends CI_Model {

	function __construct()
	{
		parent ::__construct();
	}


	public function index()
	{
		$this->load->view('view_inicio');
	}

	public function insertar_referido($datos){
        $this->db->insert('usuario',$datos);
        return $this->db->insert_id();
    }

	
}
?>