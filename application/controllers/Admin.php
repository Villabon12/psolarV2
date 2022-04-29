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
		if($id=$this->input->post('id_v')){
			$result['venta_historial']=$this->model_admin->cargar_venta_historial($id);

		}
		$this->load->view('admin/view_Header',$result);
		$this->load->view('admin/view_Menuadmin',$result);
		$this->load->view('admin/view_index',$result);
	}else{
		redirect(base_url()."index.php/inicio");
	}
	}

	public function cliente()
	{
		if($this->session->userdata('is_logged_in')){
			
			
			$result['usuario']=$this->model_admin->traer_usuario();
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
			
			
			$result['usuario']=$this->model_admin->traer_usuario();
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

	public function add_event(){
		$arre = array(
			"title" => $this->input->post('title'),
			"usuario_id" => $this->input->post('usuario_id'),
			"hijo_id" => $this->input->post('hijo_id'),
			"color_id" => $this->input->post('color_id'),
			"start" => $this->input->post('start'),
			"end" => $this->input->post('end')
		);
	
	
		$idaddNew = $this->model_admin->add($arre);
	
		redirect(base_url()."index.php/Admin");

	}

	public function edit_calendario(){
		
		$id = $this->input->post('id');
		$arre = array(
			"title"=>$this->input->post('title'),
			"usuario" => $this->input->post('usuario_id'),
			"cita" => $this->input->post('cita'),
			"color" => $this->input->post('color_id'),
			"start" => $this->input->post('start'),
			"end" => $this->input->post('end')
		);

		$idupd= $this->model_admin->edit_calendario($id, $arre);
		redirect(base_url()."index.php/Admin");
	}

	public function delete_calendario(){
		
		$id = $this->input->post('id');

		$idupd= $this->model_admin->delete_calendario($id);
		redirect(base_url()."index.php/Admin");
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

}
?>