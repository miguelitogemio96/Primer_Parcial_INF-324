<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editar extends CI_Controller {

	public function index()
	{
		// $data['nombre'] = 'Miguel';
		// $data['apellido'] = 'Gemio';
		$this->load->model("miguelbd_model");
        $ci = $_GET['ci'];
		$filas = $this->miguelbd_model->obtener_doc_por_ci($ci);
		$usuario = $this->miguelbd_model->obtener_usuario_ci($ci);
		$data['docente'] = $filas;
		$data['usuario'] = $usuario;
		$this->load->view('view_editar', $data);
	}
}
?>