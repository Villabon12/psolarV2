<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	function __construct()
	{
		parent ::__construct();
		$this->load->model('model_login');
	}

	//Ruta para el Login
	public function index()
	{
		$this->load->view('view_login');
	}

	public function validar_user(){
		$email=$this->input->post("email");
		$pass=$this->input->post("pass");
      echo "$email $pass";
		$result=$this->model_login->cuenta_user($email, $pass);
		print_r($result);

		if ($result->contar==1){
			$dato_usuario=$this->model_login->trae_user($email,$pass);

			$session_data=array(
				"ID"=>$dato_usuario->id,
				"NOMBRE_USUARIO"=>$dato_usuario->nombre,
				"EMAIL"=>$dato_usuario->email,
				"PASS"=>$dato_usuario->pass,
				"ROL"=>$dato_usuario->roles_id,
				"is_logged_in"=>TRUE
			);
			$this->session->set_userdata($session_data);
			echo "<br> su nombre es $dato_usuario->nombre <br> 
				su usuario es $dato_usuario->email <br> 
				su contrasena es $dato_usuario->pass <br>
				su rol es $dato_usuario->roles_id <br>";
				
			echo "conectado";

			if ($dato_usuario->roles_id=='1'){
				redirect(base_url()."index.php/Admin");
			} if ($dato_usuario->roles_id=='2'){
				redirect(base_url()."index.php/Lider");
			} if ($dato_usuario->roles_id=='3'){
				redirect(base_url()."index.php/Vendedor");
			} if ($dato_usuario->roles_id=='4'){
				redirect(base_url()."index.php/Login/cerrarSession");
			}
		} else {
		 echo "usuario o contraseña es incorrecta";

		}
		
	}
	public function cerrarSession(){
	
		$session = array(
			'is_logged_in' => FALSE
		);
			$this->session->set_userdata($session);
			$this->session->sess_destroy();
			redirect(base_url()."index.php/inicio");

	}
}

