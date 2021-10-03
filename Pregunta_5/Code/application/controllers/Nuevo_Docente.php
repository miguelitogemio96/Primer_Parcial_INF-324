<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nuevo_Docente extends CI_Controller {

	public function index()
	{   
        $ci = $_POST['ci'];
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        $nombre = $_POST['nombre'];
        $fnacimiento = $_POST['fnacimiento'];
        $departamento = $_POST['departamento'];
        if ($ci != '' & $usuario != '' & $password != '' & $nombre != '' & $fnacimiento != '' & $departamento != ''){
            $this->load->model("miguelbd_model");
            $this->miguelbd_model->agregar_usuario($ci, $usuario, $password);
            $this->miguelbd_model->modificar_docente($ci, $nombre, $fnacimiento, $departamento);
            header("Location: http://localhost/PrimerParcial/Pregunta_5/Code/index.php/Docente");
            die();
        }
        
        header("Location: http://localhost/PrimerParcial/Pregunta_5/Code/index.php/Agregar?e=0");
		// $this->miguelbd_model->modificar_docente($ci,$nombre,$fnacimiento, $departamento);
		// 
		// $filas = $this->miguelbd_model->obtener_doc_por_ci($ci);
		// $data['docente'] = $filas;
		// $this->load->view('view_editar', $data);
	}
}
?>