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
		
		$this->load->view('view_index');
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
			"fecha_creacion" => $this->input->post('date("Y-m-d H:i:s")'),
		);

		//verificacion de correo

        $idrefNew = $this->model_inicio->insertar_referido($arre);

        redirect(base_url()."index.php/Inicio");
    }

	public function insertar_esti()
	{
		$arre = array(
			
		);

		$idestNew = $this->model_inicio->insertar_referido($arre);
	}

}
