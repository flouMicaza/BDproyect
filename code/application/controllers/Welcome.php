<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

		
	public function __construct(){
		parent::__construct();
		$this ->load -> helper('form');
		$this ->load -> database();
	}

	public function index()
	{
		$this->load->view('InicioB');
	}


	function otraPagina(){
		$pagina = $_POST['boton'];
		if ($pagina=='clima'){
			$this->load->view('clima');		
			return;
		}

		if ($pagina=='viaje'){
			$this->load->view('viaje');		
			return;
		}

		if ($pagina=='estacion'){
			$this->load->view('estacion');		
			return;
		}

	}

	function verEvento(){

		$evento = $_POST['Eventos'];
		if ($evento== 'Nada'){
			echo "holiwi";
			$this ->load -> view ('inicioB');
		}
		else{
			$this ->load -> model('consultas');
			$data['evento']=$evento;
			$data['query'] = $this ->consultas -> genteSegunEvento($evento);
			$this ->load -> view ('PagEvento',$data);	
		}	
		
	}


	function verDia() {
		$dia = $_POST['Dia'];
		$mes = $_POST['Mes'];
		$año = $_POST['Año'];
		$diaExacto = $año. '-' . $mes . '-' . $dia;

		if($dia==0 || $mes==0 || $año==0){
			$this ->load -> view ('pagError');

		}
		else{
			$this ->load -> model('consultas');
			$data['date']=$diaExacto;
			$data['query'] = $this ->consultas -> climaSegunDia($diaExacto);
			$this ->load -> view ('PagDia',$data);
		}
	}

	function porNacimiento() {
		$año = $_POST['año'];
		$this ->load -> model('consultas');
			$data['año']=$año;
			$data['query'] = $this ->consultas -> gentePorSuAño($año);
			$this ->load -> view ('pagViaje',$data);
		

	}

}
?>