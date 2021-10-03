<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agregar extends CI_Controller {
	public function index()
	{
        if (isset($_GET['e'])){
            echo '<script languaje = "javascript"> alert("Error al agregar el nuevo DOcente");</script>';
        }
		$data['nombre'] = 'Miguel';
		$data['apellido'] = 'Gemio';
		// $this->load->model("miguelbd_model");
        if (isset($_GET['ci']));
		// $filas = $this->miguelbd_model->obtener_doc_por_ci($ci);
		// $usuario = $this->miguelbd_model->obtener_usuario_ci($ci);
		// $data['docente'] = $filas;
		// $data['usuario'] = $usuario;
		$this->load->view('view_agregar', $data);
	}
}
?>