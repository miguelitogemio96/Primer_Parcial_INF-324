<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eliminar extends CI_Controller {

	public function index()
	{
        $ci = $_GET['ci'];
        $this->load->model("miguelbd_model");
		$this->miguelbd_model->eliminar_docente($ci);
        header("Location: http://localhost/PrimerParcial/Pregunta_5/Code/index.php/Docente");
		// 
		// $filas = $this->miguelbd_model->obtener_doc_por_ci($ci);
		// $data['docente'] = $filas;
		// $this->load->view('view_editar', $data);
	}
}
?>