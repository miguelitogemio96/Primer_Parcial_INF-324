<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modificar extends CI_Controller {

	public function index()
	{
        $ci = $_GET['ci'];
        $nombre = $_POST['nombre'];
        $fnacimiento = $_POST['fnacimiento'];
        $departamento = $_POST['departamento'];
        $this->load->model("miguelbd_model");
		$this->miguelbd_model->modificar_docente($ci,$nombre,$fnacimiento, $departamento);
        header("Location: http://localhost/PrimerParcial/Pregunta_5/Code/index.php/Docente");
		// 
		// $filas = $this->miguelbd_model->obtener_doc_por_ci($ci);
		// $data['docente'] = $filas;
		// $this->load->view('view_editar', $data);
	}
}
?>