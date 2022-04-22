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

	public function traer_usuario(){
		$sql="SELECT * FROM usuario;";

		$query=$this->db->query($sql);

		return $query->result();
	}

	public function traer_colores(){
		$sql="SELECT * FROM color;";

		$query=$this->db->query($sql);

		return $query->result();
	}

	public function add($datos){
		$this->db->insert('calendario',$datos);
		return $this->db->insert_id();

	}

	public function cargar_calendario($id){
		$sql="SELECT * FROM calendario c, usuario u 
		WHERE c.usuario_id = $id ;";

		$query=$this->db->query($sql);

		return $query->result();

	}
	public function cargar_calendario1(){
		$sql="SELECT * FROM calendario;";

		$query=$this->db->query($sql);

		return $query->result();

	}

	public function edit_evento($start, $end, $id){
	
		$sql = "UPDATE calendario SET  start = 
		'$start', end = '$end' WHERE id = $id ;";

		$query=$this->db->query($sql);

		return $query->row();
	
	}

	public function edit_calendario($id, $datos){
		$this->db->where('id',$id);
		$this->db->update('calendario', $datos);
		return $this->db->update_id();
	}

	public function delete_calendario($id){
		$sql = "DELETE FROM calendario WHERE id = $id;";

		$query=$this->db->query($sql);

		return $query->row();
	}
}
?>