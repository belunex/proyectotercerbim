<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Estudiante extends CI_Controller {
    public function index()
	{	
        $lista=$this->estudiante_model->listaestudiantes();
        $data['estudiantes']=$lista;
        
		$this->load->view('inc/cabecera');
		$this->load->view('inc/menu');
		$this->load->view('est_lista',$data);
		$this->load->view('inc/pie');
	}
	public function agregar()
	{
		//mostrar un formulario para agregar un nuevo estudiante
		$this->load->view('inc/cabecera');
		$this->load->view('inc/menu');
		$this->load->view('est_formulario');
		$this->load->view('inc/pie');
	}

	public function agregarbd()
	{
		// atributo BD         formulario
		$data['nombre']=$_POST['nombre'];
		$data['primerApellido']=$_POST['apellido1'];
		$data['segundoApellido']=$_POST['apellido2'];

		$this->estudiante_model->agregarestudiante($data);

		redirect('estudiante/index','refresh');
	}

	public function eliminarbd()
	{
		$idestudiante=$_POST['idestudiante'];
		$this->estudiante_model->eliminarestudiante($idestudiante);
		redirect('estudiante/index','refresh'); //carga de lista actualizada
	}

	public function modificar()
	{
		$idestudiante=$_POST['idestudiante'];
		$data['infoestudiante']=$this->estudiante_model->recuperarestudiante($idestudiante);

		$this->load->view('inc/cabecera');
		$this->load->view('inc/menu');
		$this->load->view('est_modificar',$data);
		$this->load->view('inc/pie');
	}

	public function modificarbd()
	{
		$idestudiante=$_POST['idestudiante'];

		$data['nombre']=$_POST['nombre'];
		$data['primerApellido']=$_POST['apellido1'];
		$data['segundoApellido']=$_POST['apellido2'];
		
		$this->estudiante_model->modificarestudiante($idestudiante,$data);

		redirect('estudiante/index','refresh');
	}

	public function deshabilitarbd()
	{
		$idestudiante=$_POST['idestudiante'];
		$data['habilitado']='0';

		$this->estudiante_model->modificarestudiante($idestudiante,$data);

		redirect('estudiante/index','refresh');
	}

	public function habilitarbd()
	{
		$idestudiante=$_POST['idestudiante'];
		$data['habilitado']='1';

		$this->estudiante_model->modificarestudiante($idestudiante,$data);

		redirect('estudiante/deshabilitados','refresh');
	}

	public function deshabilitados()
	{	
        $lista=$this->estudiante_model->listaestudiantesdes();
        $data['estudiantes']=$lista;
        
		$this->load->view('inc/cabecera');
		$this->load->view('inc/menu');
		$this->load->view('est_listades',$data);
		$this->load->view('inc/pie');
	}

	public function indexlte()
	{	
		$lista=$this->estudiante_model->listaestudiantes();
        $data['estudiantes']=$lista;

		$this->load->view('inclte/cabecera');
		$this->load->view('inclte/menusuperior');
		$this->load->view('inclte/menulateral');
		$this->load->view('est_listalte',$data);
		$this->load->view('inclte/pie');
	}
	
}
?>
<?php
//background-color: rgb(184, 205, 216);
?>