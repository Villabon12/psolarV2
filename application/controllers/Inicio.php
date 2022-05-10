<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	// Modelo de inicio
	function __construct()
	{
		parent ::__construct();
		$this->load->model('model_inicio');
	}

	//Ruta para el inicio
	public function index()
	{
		$result['pais']=$this->model_inicio->traer_pais();
		$this->load->view('view_index',$result);
	}

	public function referido()
	{
		$this->load->view('view_regRef');
	}


	public function insertar_refer(){
            
        $arre = array(
            "nombre" => $this->input->post('nombre'),
            "apellido" => $this->input->post('apellido'),
            "email" => $this->input->post('email'),
            "telefono" => $this->input->post('telefono'),
		);

		//verificacion de correo

        $idrefNew = $this->model_inicio->insertar_referido($arre);

        redirect(base_url()."index.php/Inicio");
    }

	public function insertar_estimado(){
		if($this->input->is_ajax_request()){
			$arre = array(
				"v_luz" => $this->input->post('v_luz'),
				"nombre" => $this->input->post('nombre'),
				"apellido" => $this->input->post('apellido'),
				"direccion" => $this->input->post('direccion'),
				"ciudad" => $this->input->post('ciudad'),
				"estado_id" => $this->input->post('estado_id'),
				"email" => $this->input->post('email'),
				"telefono" => $this->input->post('telefono'),
			);

			//$this->form_validation->set_rules('v_luz','Factura','required');
			$this->form_validation->set_rules('nombre','Nombre','required');
			// $this->form_validation->set_rules('apellido','Apellido','required');
			// $this->form_validation->set_rules('direccion','Direccion','required');
			// $this->form_validation->set_rules('ciudad','Ciudad','required');
			// $this->form_validation->set_rules('estado_id','Codigo','required');
			// $this->form_validation->set_rules('email','Email','required|valid_email');
			// $this->form_validation->set_rules('telefono','Telefono','required');

			$this->form_validation->set_message("nombre","este campo es necesario");

			if ($this->form_validation->run()===TRUE) {

				$idrefNew = $this->model_inicio->insertar_referido($arre);

				redirect(base_url()."index.php/Inicio");
				
			}else { echo "no se pudo guardar";}
			
		}else{
			echo "no cumple las condiciones";
		}
    }

}
