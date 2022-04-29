<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lider extends CI_Controller {

	
	function __construct()
	{
		parent ::__construct();
		$this->load->model('model_login');
		$this->load->model('model_lider');
	}

	//Ruta para el Login
	public function index()
	{
		if($this->session->userdata('is_logged_in')){
		$result['color']=$this->model_lider->traer_colores();
		$result['usuario']=$this->model_lider->traer_usuario();
		$result['events']=$this->model_login->cargar_calendario();
		$result['perfil']=$this->model_login->cargar_datos();
		$this->load->view('admin/view_Header',$result);
		$this->load->view('admin/view_Menuadmin',$result);
		$this->load->view('lider/view_index',$result);
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
}
?>