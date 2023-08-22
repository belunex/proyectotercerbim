<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Base extends CI_Controller {
    public function index()
	{	
		$lista=$this->estudiante_model->listaestudiantes();
		$data['estudiantes']=$lista;
		$this->load->view('inc/cabecera');
		$this->load->view('inc/menu');
		$this->load->view('inicio');
		$this->load->view('inc/pie');
	}

    public function prod()
	{
		$lista=$this->estudiante_model->listaestudiantes();
		$data['estudiante']=$lista;

		$this->load->view('inc/cabecera');
		$this->load->view('inc/menu');
		$this->load->view('productos');
		$this->load->view('inc/pie');
	}

    public function cont()
	{
		$this->load->view('inc/cabecera');
		$this->load->view('inc/menu');
		$this->load->view('contactos');
		$this->load->view('inc/pie');
	}

	public function pruebabd()
	{
		$query=$this->db->get('estudiantes');
		$execonsulta=$query->result();
		print_r($execonsulta);
	}
}
?>