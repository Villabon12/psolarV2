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
        FROM usuario WHERE email= ? AND
        pass = ? ;";
    
    $query =$this->db->query($sql,[$email, $pass]);

    return $query->row();

    }

    public function traer_usuario_lider(){
        $idUsuario = $this->session->userdata("ID");
		$sql="SELECT * FROM usuario WHERE roles_id = ? AND papa = ?;";

		$query=$this->db->query($sql, [2, $idUsuario]);

		return $query->result();
	}

    public function traer_usuario_vendedor(){
        $idUsuario = $this->session->userdata("ID");
		$sql="SELECT * FROM usuario WHERE roles_id = ? AND papa = ?;";

		$query=$this->db->query($sql, [3, $idUsuario]);

		return $query->result();
	}

    public function trae_user($email=null, $pass=null){

        $sql= "SELECT *, u.id as id_user FROM usuario u, roles r
        WHERE u.roles_id=r.id AND
        u.email=? AND u.pass= ?;";

        $query=$this->db->query($sql, [$email, $pass]);

        return $query->row();
    }

    public function cargar_datos(){
        $idUsuario = $this->session->userdata('ID');
        $sql="SELECT * FROM usuario WHERE id= ?";

        $query=$this->db->query($sql, [$idUsuario]);

        return $query->row();
    }

    public function insertar_usuario($datos){
        $this->db->insert('usuario',$datos);
        return $this->db->insert_id();
    }

    public function cargar_calendario(){
        $id = $this->session->userdata('ID');
		$sql="SELECT * FROM calendario c, usuario u 
		WHERE c.usuario_id = ? ;";

		$query=$this->db->query($sql, [$id]);

		return $query->result();
    }   
    
}
?>