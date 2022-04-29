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
		$id = $this->post->input('id');
		// $this->model->;
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

	public function insertar_venta()
	{
		$arre = array(
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
			"disponibilidad"=>$this->input->post('disponibilidad')
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

}
?>