<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Docente extends CI_Controller {

	public function index()
	{
		$this->load->model("miguelbd_model");
		$filas = $this->miguelbd_model->docentes();
		$data['personas'] = $filas;
		$this->load->view('view_docente', $data);
	}
}
?>