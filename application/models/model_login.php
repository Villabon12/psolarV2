<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_login extends CI_Model {

	function __construct()
	{
		parent ::__construct();
	}


	public function index()
	{
		$this->load->view('view_login');
	}

    public function cuenta_user($email=null, $pass=null){

        $sql="SELECT COUNT(*) AS contar
        FROM usuario WHERE email='$email' AND
        pass = '$pass';";
    
    $query =$this->db->query($sql);

    return $query->row();

    }

    public function trae_user($email=null, $pass=null){

        $sql= "SELECT * FROM usuario u, roles r
        WHERE u.roles_id=r.id AND
        u.email='$email' AND u.pass='$pass';";

        $query=$this->db->query($sql);

        return $query->row();
    }

    public function cargar_datos(){
        $idUsuario = $this->session->userdata('ID');
        $sql="SELECT * FROM usuario WHERE id_usuario=$idUsuario";

        $query=$this->db->query($sql);

        return $query->result();
    }

    public function insertar_usuario($datos){
        $this->db->insert('usuario',$datos);
        return $this->db->insert_id();
    }
}
?>