<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class miguelbd_model extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }

	public function docentes()
	{
        $this->load->database();
        $query=$this->db->query('select p.ci, p.nombre, p.fnacimiento, p.departamento from personas p, usuarios u where u.tipo = "d" and u.ci = p.ci');
        return $query->result();
	}

    public function obtener_doc_por_ci($ci){
        $this->load->database();
        $query=$this->db->query("select * from personas where ci = ".$ci.";");
        return $query->result();
    }

    public function modificar_docente($ci, $nombre, $fnacimiento, $departamento){
        $this->load->database();
        $this->db->query("delete from personas where ci = ".$ci.";");
        $this->db->query("insert into personas (ci,nombre,fnacimiento,departamento) values (".$ci.",'".$nombre."','".$fnacimiento."','".$departamento."');");
    }
    public function agregar_usuario($ci, $usuario, $password){
        $this->load->database();
        $this->db->query("insert into usuarios (ci,usuario,password,tipo) values (".$ci.",'".$usuario."','".$password."','d');");
    }

    public function eliminar_docente($ci){
        $this->load->database();
        $this->db->query("delete from personas where ci = ".$ci.";");
        $this->db->query("delete from usuarios where ci = ".$ci.";");
    }
    
    public function obtener_usuario_ci($ci){
        $this->load->database();
        $query=$this->db->query("select * from usuarios where ci = ".$ci.";");
        $query=$query->result();
        $query=$query[0];
        return $query->usuario;
    }
}
