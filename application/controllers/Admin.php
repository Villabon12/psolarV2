<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	function __construct()
	{
		parent ::__construct();
		$this->load->model('model_login');
		$this->load->model('model_admin');
	}

	//Ruta para el Login
	public function index()
	{
		if($this->session->userdata('is_logged_in')){
			
			
		$result['usuario']=$this->model_admin->traer_usuario();
		$result['venta']=$this->model_admin->cargar_venta();
		$result['perfil']=$this->model_login->cargar_datos();

		$this->load->view('admin/view_Header',$result);
		$this->load->view('admin/view_Menuadmin',$result);
		$this->load->view('admin/view_index',$result);
		}else{
			redirect(base_url()."index.php/inicio");
		}
	}

	public function historial()
	{
		$id = $this->post->input('id_v');
		$result=$this->model_admin->cargar_venta_historial($id);
		return $result;
	}

	public function cliente()
	{
		if($this->session->userdata('is_logged_in')){
			
			
			$result['usuario']=$this->model_admin->cargar_usuario();
			$result['perfil']=$this->model_login->cargar_datos();
			$result['cliente']=$this->model_admin->traer_cliente();

			$this->load->view('admin/view_Header',$result);
			$this->load->view('admin/view_Menuadmin',$result);
			$this->load->view('admin/view_PotClien',$result);
		}else{
			redirect(base_url()."index.php/inicio");
		}
	}

	public function usuario()
	{
		if($this->session->userdata('is_logged_in')){
			
			
			$result['usuario']=$this->model_admin->cargar_usuario();
			$result['perfil']=$this->model_login->cargar_datos();

			$this->load->view('admin/view_Header',$result);
			$this->load->view('admin/view_Menuadmin',$result);
			$this->load->view('admin/view_AdminUs',$result);
		}else{
			redirect(base_url()."index.php/inicio");
		}
	}

	public function email()
	{
		if($this->session->userdata('is_logged_in')){
			
			
			$result['usuario']=$this->model_admin->traer_usuario();
			$result['perfil']=$this->model_login->cargar_datos();

			$this->load->view('admin/view_Header',$result);
			$this->load->view('admin/view_Menuadmin',$result);
			$this->load->view('admin/view_Correo',$result);
		}else{
			redirect(base_url()."index.php/inicio");
		}
	}

	public function anuncios()
	{
		if($this->session->userdata('is_logged_in')){
			
			
			$result['usuario']=$this->model_admin->traer_usuario();
			$result['perfil']=$this->model_login->cargar_datos();

			$this->load->view('admin/view_Header',$result);
			$this->load->view('admin/view_Menuadmin',$result);
			$this->load->view('admin/view_CambioAn',$result);
		}else{
			redirect(base_url()."index.php/inicio");
		}
	}

	public function cambio()
	{
		if($this->session->userdata('is_logged_in')){
			
			$result['usuario']=$this->model_admin->traer_usuario();
			$result['perfil']=$this->model_login->cargar_datos();

			$this->load->view('admin/view_Header',$result);
			$this->load->view('admin/view_Menuadmin',$result);
			$this->load->view('admin/view_CambioC',$result);
		}else{
			redirect(base_url()."index.php/inicio");
		}
	}

	public function calendario()
	{
		if($this->session->userdata('is_logged_in')){
			
		
			$result['usuario']=$this->model_admin->traer_usuario();
			$result['perfil']=$this->model_login->cargar_datos();

			$this->load->view('admin/view_Header',$result);
			$this->load->view('admin/view_Menuadmin',$result);
			$this->load->view('admin/view_calendario');
		}else{
			redirect(base_url()."index.php/inicio");
		}
	}


	public function insertar_venta()
	{
		$arre = array(

			"disponibilidad"=>$this->input->post('disponibilidad'),
			"nombre"=>$this->input->post('nombre'),
			"apellido"=>$this->input->post('apellido'),
			"pass"=>$this->input->post('pass'),
			"direccion"=>$this->input->post('direccion'),
			"email"=>$this->input->post('email'),
			"telefono"=>$this->input->post('telefono'),
			"papa"=>$this->input->post('papa'),
			"estado_id"=>$this->input->post('estado_id'),
			"roles_id"=>$this->input->post('roles_id'),
			"activo"=>$this->input->post('activo'),
			"ciudad"=>$this->input->post('ciudad'),
			"modifica_usuario"=>$this->input->post('modifica_usuario'),

			"id"=>$this->input->post('id'),
			"disponibilidad"=>$this->input->post('disponibilidad')
		);

		$idaddVent = $this->model_admin->insertar_venta($arre);
		redirect(base_url()."index.php/Admin/");
	}

	public function upd_hecho()
	{
		$arre = array(
			"id"=>$this->input->post('id'),
			"disponibilidad"=>$this->input->post('disponibilidad'),
			"nombre"=>$this->input->post('nombre'),
			"apellido"=>$this->input->post('apellido'),
			"pass"=>$this->input->post('pass'),
			"direccion"=>$this->input->post('direccion'),
			"email"=>$this->input->post('email'),
			"telefono"=>$this->input->post('telefono'),
			"papa"=>$this->input->post('papa'),
			"estado_id"=>$this->input->post('estado_id'),
			"roles_id"=>$this->input->post('roles_id'),
			"activo"=>$this->input->post('activo'),
			"ciudad"=>$this->input->post('ciudad'),
			"modifica_usuario"=>$this->input->post('modifica_usuario')
		);

		$idaddVent = $this->model_admin->upd_hecho($arre);
		redirect(base_url()."index.php/Admin/cliente");
	}

	public function actualizar_venta()
	{
		$arre = array(
			"id"=> $this->input->post('id'),
			"etapas"=> $this->input->post('etapas'),
			"modifica"=>$this->input->post('modifica'),
			"disponibilidad"=>$this->input->post('disponibilidad')
		);
	
	
		$idaddNew = $this->model_admin->actualiza_venta($arre);
	
		redirect(base_url()."index.php/Admin");
	}

	public function actualizar_proceso()
	{
		$arre = array(
			"id"=> $this->input->post('id'),
			"etapas"=> $this->input->post('etapas'),
			"modifica"=>$this->input->post('modifica'),
			"disponibilidad"=>$this->input->post('disponibilidad')
		);
	
	
		$idaddNew = $this->model_admin->actualiza_proceso($arre);
	
		redirect(base_url()."index.php/Admin");
	}

	function cargar_historial()
	{
		if($this->input->is_ajax_request()){
			$id = $this->input->post("id");
			$datos = $this->model_admin->cargar_venta_historial($id);
			echo json_encode($datos);
		}else{
			show_404();
		}
	}

	function load()
	{
	 $event_data = $this->model_admin->fetch_all_event();
	 foreach($event_data->result_array() as $row)
	 {
	  $data[] = array(
	   'id' => $row['id'],
	   'title' => $row['title'],
	   'start' => $row['start'],
	   'end' => $row['end']
	  );
	 }
	 echo json_encode($data);
	}
   
	function insert()
	{
	 if($this->input->post('title'))
	 {
	  $data = array(
	   'title'  => $this->input->post('title'),
	   'start'=> $this->input->post('start'),
	   'end' => $this->input->post('end')
	  );
	  $this->model_admin->insert_event($data);
	 }
	}
   
	function update()
	{
	 if($this->input->post('id'))
	 {
	  $data = array(
	   'title'   => $this->input->post('title'),
	   'start' => $this->input->post('start'),
	   'end'  => $this->input->post('end')
	  );
   
	  $this->model_admin->update_event($data, $this->input->post('id'));
	 }
	}
   
	function delete()
	{
	 if($this->input->post('id'))
	 {
	  $this->model_admin->delete_event($this->input->post('id'));
	 }
	}
   
	public function upd_contra()
	{
		$nueva = array(
			'id'=>$this->input->post('id'),
			'pass'=>$this->input->post('nueva'));
		$repetir = array(
			'id'=>$this->input->post('id'),
			'pass'=>$this->input->post('repetir'));
		
		if($nueva == $repetir){
			$this->model_admin->upd_contra($nueva);
			redirect(base_url()."index.php/Admin");
		} else{
			echo "contraseña incorrecta";
		}
	}
   
	public function upd_rol()
	{
		$nueva = array(
			'id'=>$this->input->post('id'),
			'roles_id'=>$this->input->post('roles_id'));
		
			$this->model_admin->upd_rol($nueva);
			redirect(base_url()."index.php/Admin/usuario");

	}
	
	public function upd_activo()
	{
		$nueva = array(
			'id'=>$this->input->post('id'),
			'activo'=>$this->input->post('activo'));
		
			$this->model_admin->upd_activo($nueva);
			redirect(base_url()."index.php/Admin/usuario");

	}

	public function actualizarUsuario()
	{
		$datos = array(
			"id_v"=>$this->input->post('id_v'),
			"id_u"=>$this->input->post('id_v'),
			"nombre"=>$this->input->post('nombre'),
			"apellido"=>$this->input->post('apellido'),
			"direccion"=>$this->input->post('direccion'),
			"email"=>$this->input->post('email'),
			"telefono"=>$this->input->post('telefono'),
			"papa"=>$this->input->post('papa'),
			"disponibilidad_id"=>$this->input->post('disponibilidad_id')
			
		);
		
		if($datos['disponibilidad_id'] != ""){
			$this->model_admin->actualizarUsuario($datos);
			$this->model_admin->updDisponibilidad($datos);
			redirect(base_url()."index.php/Admin");
		}
		else{
			$this->model_admin->actualizarUsuario($datos);
		
			redirect(base_url()."index.php/Admin");
		}
	}

}
?>