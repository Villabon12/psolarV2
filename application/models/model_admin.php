<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_admin extends CI_Model {

	function __construct()
	{
		parent ::__construct();
	}


	public function index()
	{
		$this->load->view('admin/index');
	}

	public function cargar_venta()
	{
		$sql="SELECT v.id, e.etapa, e.porcentaje, e.id AS n, d.disponible, d.hecho, u.nombre, u.apellido, u.id AS modifica  
		FROM venta v,disponibilidad d, etapas e, usuario u 
		WHERE e.id = v.etapas_id AND d.id = v.disponibilidad_id AND u.id = v.usuario_id;";

		$query=$this->db->query($sql);

		return $query->result();
	}
	public function cargar_venta_historial($arre)
	{
		$id=$arre['id'];
		$sql="SELECT  u.nombre, u.apellido, d.disponible, d.hecho
		FROM venta_historial vh, usuario u, disponibilidad d, venta v
		WHERE vh.venta_id = ?  AND  u.id=vh.modifica_usuario AND d.id=vh.disponibilidad_id AND v.id=vh.venta_id;";

		$query=$this->db->query($sql,[$id]);

		return $query->result();
	}

	public function traer_usuario(){
		$sql="SELECT * FROM usuario;";

		$query=$this->db->query($sql);

		return $query->result();
	}
	public function traer_cliente(){
		$sql="SELECT * FROM usuario WHERE roles_id = 4;";

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

	public function cargar_calendario1(){
		$sql="SELECT * FROM calendario;";

		$query=$this->db->query($sql);

		return $query->result();

	}

	public function edit_evento($start, $end, $id){
	
		$sql = "UPDATE calendario SET  start = 
		?, end = ? WHERE id = ? ;";

		$query=$this->db->query($sql, [$start, $end, $id]);

		return $query->row();
	
	}

	public function edit_calendario($id, $datos){
		$this->db->where('id',$id);
		$this->db->update('calendario', $datos);
		return $this->db->update_id();
	}

	public function insertar_historial($datos){
		$arre = array("modifica_usuario" => $datos['modifica'],
			"disponibilidad_id"=> $datos["disponibilidad"],
			"venta_id" => $datos['id']);
		$this->db->insert('venta_historial',$arre);
		return $this->db->insert_id();

	}

	public function actualiza_venta($arrayData)
	{
		if($arrayData['etapas'] < 8){
			$this->insertar_historial($arrayData);
			$arrayData['etapas']+=1;
			$arre = array("etapas_id" => $arrayData['etapas']);
			$this->db->where('id',$arrayData['id']);
			$this->db->update('venta', $arre);
		}
	}

	public function actualiza_proceso($arrayDatas)
	{
			$this->insertar_historial($arrayDatas);
			$arrayDatas['disponibilidad']==3;
			$arre = array("disponibilidad_id" => $arrayDatas['disponibilidad']);
			$this->db->where('id',$arrayDatas['id']);
			$this->db->update('venta', $arre);
	}
	
}
?>