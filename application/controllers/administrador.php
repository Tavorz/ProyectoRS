<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Administrador extends CI_Controller {
	 
		function __construct() {
			parent::__construct();
			$this->is_logged();
	 		$this->load->model('profesor');
	 		$this->load->model('reunion');

	    }

	   function is_logged() {
	   		if(!$this->session->userdata('logged_in')) {
	   			redirect('login', 'refresh');
	   		}
	   	}

		function index() {	 
	 		$session_data = $this->session->userdata('logged_in');
	 		$data['correo'] = $session_data['correo'];
	 		$this->load->model('profesor'); 
			$profesores = $this->profesor->get_all(); 		 
			$data['profesores'] = $profesores;	
			$this->load->view('administrador/index', $data);
		}

		function profesores_admin() {
			$session_data = $this->session->userdata('logged_in');
	 		$data['correo'] = $session_data['correo'];
	 		$this->load->model('profesor'); 
			$profesores = $this->profesor->get_all(); 		 
			$data['profesores'] = $profesores;	
			$this->load->view('administrador/profesores_admin', $data);
		}

		function agregar() {
			$this->profesor->insert();
			redirect('administrador/profesores_admin');
		}	
		 
		function borrar() {	
			$this->profesor->delete($data);
			redirect('administrador/profesores_admin');
		}


	 	function editar() {
			$this->load->model('profesor');
			$this->profesor->update($data);
			redirect('administrador/profesores_admin');
		}	 


		function mostrar_alta() {
			$this->load->view('administrador/agregar');
		}

		function mostrar_baja($id) {
			$profesores = $this->profesor->obtener_profesor($id); 		 
			$data['profesores'] = $profesores;
			$data['id'] = $id;
			$this->load->view('administrador/borrar', $data);
		}

		function mostrar_modificar($id){
			$data['profesor'] = $this->profesor->obtener_profesor($id);
			$this->load->view('administrador/modificar', $data);
		}

		function reuniones_admin() {
			$session_data = $this->session->userdata('logged_in');
	 		$data['correo'] = $session_data['correo'];
	 		$this->load->model('reunion'); 
			$reuniones = $this->reunion->get_all_reunion(); 		 
			$data['reuniones'] = $reuniones;	
			$this->load->view('administrador/reunion', $data);
		}

		function mostrar_alta_reunion() {
			$this->load->view('administrador/agregar_reunion');
		}

		function alta_reunion() {
			$this->reunion->insert_reunion();
			redirect('administrador/reuniones_admin');
		}


		function mostrar_modificar_reunion($id){
			$data['reunion'] = $this->reunion->obtener_reunion($id);
			$this->load->view('administrador/modificar_reunion', $data);
		}

		function editar_reunion() {
			$this->load->model('reunion');
			$this->reunion->update_reunion($data);
			redirect('administrador/reuniones_admin');
		}


		function mostrar_baja_reunion($id) {
			$reuniones = $this->reunion->obtener_reunion($id); 		 
			$data['reuniones'] = $reuniones;
			$data['id'] = $id;
			$this->load->view('administrador/baja_reunion', $data);
		}

		function borrar_reunion(){
			$this->reunion->delete_reunion($data);
			redirect('administrador/reuniones_admin');
		}






	
	}
?>


