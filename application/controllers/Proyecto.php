<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Proyecto extends CI_Controller {
    public function index()
	{	
		$this->load->view('inc/cabecera');
		
		$this->load->view('principal');
		$this->load->view('inc/pie');
        $this->load->view('inc/navegacion');
	}

    public function ejpl()
	{
		$this->load->view('inc/cabecera');
	
		$this->load->view('resumen');
		$this->load->view('inc/pie');
        $this->load->view('inc/navegacion');
	}

    public function obs()
	{
		$this->load->view('inc/cabecera');

		$this->load->view('objetivos');
		$this->load->view('inc/pie');
        $this->load->view('inc/navegacion');
	}
}
?>