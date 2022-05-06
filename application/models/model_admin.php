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

	// SELECT

	public function cargar_venta()
	{
		$sql="SELECT v.id, e.etapa, e.porcentaje, e.id AS n, d.disponible, d.hecho, u.nombre, u.apellido, u.id AS modifica,  u.email, u.direccion,  
		u.papa, u.telefono
		FROM venta v,disponibilidad d, etapas e, usuario u 
		WHERE e.id = v.etapas_id AND d.id = v.disponibilidad_id AND u.id = v.usuario_id ;";

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

		    if($query->num_rows > 0){
				$id_v = $query->fetch_assoc();
			}else{
				$data['status'] = 'err';
			}
			
			//returns data as JSON format
			echo json_encode($id_v);
	}

	public function traer_usuario(){
		$sql="SELECT * FROM usuario;";

		$query=$this->db->query($sql);

		return $query->result();
	}

	public function cargar_usuario(){
		$sql="SELECT u.*, r.id as rol_id, r.rol FROM usuario u, roles r WHERE u.roles_id = r.id AND activo = 1";

		$query=$this->db->query($sql);

		return $query->result();
	}

	public function traer_cliente(){
		$sql="SELECT u.*, d.id AS disponibilidad, d.disponible, d.hecho 
		FROM usuario u, disponibilidad d WHERE roles_id = 4  AND u.disponibilidad_id = d.id;";

		$query=$this->db->query($sql);

		return $query->result();
	}

	public function traer_colores(){
		$sql="SELECT * FROM color;";

		$query=$this->db->query($sql);

		return $query->result();
	}

	public function getEventos()
    {
        $this->db->select(' title, start, end');
		$this->db->from('calendario');

		return $this->db->get()->result();

    }

	// INSERTAR


	
	public function insertar_venta($datos){
		$this->upd_hecho($datos);
		$arre = array("disponibilidad_id" => $datos['disponibilidad'],
		"usuario_id"=>$datos['id']);
		$this->db->insert('venta',$arre);
		return $this->db->insert_id();
		
	}
	
	public function insertar_historial_venta($datos){
		$arre = array("modifica_usuario" => $datos['modifica'],
		"disponibilidad_id"=> $datos["disponibilidad"],
		"venta_id" => $datos['id']);
		$this->db->insert('venta_historial',$arre);
		return $this->db->insert_id();
		
	}
	public function insertar_historial_usuario($datos){
		$arre = array("modifica_usuario" => $datos['modifica_usuario'],
		"nombre"=> $datos["nombre"],
		"apellido"=> $datos["apellido"],
		"pass"=> $datos["pass"],
		"direccion"=> $datos["direccion"],
		"email"=> $datos["email"],
		"telefono"=> $datos["telefono"],
		"papa"=> $datos["papa"],
		"estado_id"=> $datos["estado_id"],
		"roles_id"=> $datos["roles_id"],
		"activo"=> $datos["activo"],
		"v_luz"=> $datos["v_luz"],
		"ciudad"=> $datos["ciudad"]
		);
		$this->db->insert('usuario_historial',$arre);
		return $this->db->insert_id();
		
	}

	// UPDATE

	public function actualizarUsuario($datos)
	{
		$arre=array(
			"nombre"=> $datos["nombre"],
			"apellido"=> $datos["apellido"],
			"direccion"=> $datos["direccion"],
			"email"=> $datos["email"],
			"telefono"=> $datos["telefono"],
			"papa"=> $datos["papa"],
		);
		$this->db->where('id', $datos['id']);
		$this->db->update('usuario', $arre['id']);
		
	}

	public function upd_contra($datos)
	{
		$arre = array(
			"pass" => $datos['pass']
		);
		$this->db->where('id', $datos['id']);
		$this->db->update('usuario', $arre);
	}

	public function upd_estado($datos)
	{
		$arre = array(
			"disponibilidad_id" => $datos['disponibilidad_id']
		);
		$this->db->where('id', $datos['id']);
		$this->db->update('venta', $arre);
	}

	public function upd_rol($datos)
	{
		$arre = array(
			"roles_id" => $datos['roles_id']
		);
		$this->db->where('id', $datos['id']);
		$this->db->update('usuario', $arre);
	}
	
	public function upd_activo($datos)
	{
		$arre = array(
			"activo" => $datos['activo']
		);
		$this->db->where('id', $datos['id']);
		$this->db->update('usuario', $arre);
	}

	public function upd_hecho($datos){
		// $this->insertar_historial_usuario($datos);
		$datos['disponibilidad'] == 3;
		$arre = array("disponibilidad_id" => $datos['disponibilidad']);
		$this->db->where('id', $datos['id']);
		$this->db->update('usuario',$arre);
	}

	public function actualiza_venta($arrayData)
	{
		if($arrayData['etapas'] < 8){
			$this->insertar_historial_venta($arrayData);
			$arrayData['etapas']+=1;
			$arre = array("etapas_id" => $arrayData['etapas']);
			$this->db->where('id',$arrayData['id']);
			$this->db->update('venta', $arre);
		}
	}

	public function actualiza_proceso($arrayDatas)
	{
			$this->insertar_historial_venta($arrayDatas);
			$arrayDatas['disponibilidad']==3;
			$arre = array("disponibilidad_id" => $arrayDatas['disponibilidad']);
			$this->db->where('id',$arrayDatas['id']);
			$this->db->update('venta', $arre);
	}

	// CALENDARIO MODEL

	public function updEvento($param)
	{
		$campos = array(
			'start' => $param['start'],
			'end' => $param['end']
		);

		$this->db->where('id',$param['id']);
		$this->db->update('calendario', $campos);

		if($this->db->affected_rows() == 1){
			return 1;
		}else{
			return 0;
		}
		
	}

	function fetch_all_event(){
		$this->db->order_by('id');
		return $this->db->get('calendario');
	   }
	  
	function insert_event($data)
	{
	$this->db->insert('calendario', $data);
	}
	
	function update_event($data, $id)
	{
	$this->db->where('id', $id);
	$this->db->update('calendario', $data);
	}
	
	function delete_event($id)
	{
	$this->db->where('id', $id);
	$this->db->delete('calendario');
	}

	
}
?>