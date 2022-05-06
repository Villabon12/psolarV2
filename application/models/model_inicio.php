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

	public function traer_pais(){

		$sql="SELECT * FROM pais";

		$query=$this->db->query($sql);

		return $query->result();
	}

	public function traer_estado(){

		$sql="SELECT * FROM estado";

		$query=$this->db->query($sql);

		return $query->result();
	}

	public function insertar_estimado($datos){
        $this->db->insert('usuario',$datos);
        return $this->db->insert_id();
    }

	
}
?>