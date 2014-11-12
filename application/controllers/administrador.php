<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Administrador extends CI_Controller {
	 
		function __construct() {
			parent::__construct();
	 		$this->load->model('profesor');
	   }

	   function is_logged() {
	   		if(!$this->session->userdata('logged_in')) {
	   			redirect('login', 'refresh');
	   		}
	   }
		 
		function index() {
			$this->is_logged();	 
	 		$session_data = $this->session->userdata('logged_in');
	 		$data['correo'] = $session_data['correo'];
	 		$this->load->model('profesor'); 
		 	$data['page_title'] = "Página del aministrador";
			$profesores = $this->profesor->get_all(); 		 
			$data['profesores'] = $profesores;	
			$this->load->view('administrador/index', $data);

		}

		function agregar() {
			$this->is_logged();
			$this->profesor->insert();
			redirect('administrador/index');
		}	
		 
		function borrar() {
			$this->is_logged();	
			$this->profesor->delete($data);
			redirect('administrador/index');
		}

		function logout() {
	   		$this->session->unset_userdata('logged_in');
	   		session_destroy();
	   		redirect('administrador', 'refresh');
	 	}

	 	function editar() {
	 		$this->is_logged();
			$this->load->model('profesor');
			$this->profesor->update($data);
			redirect('administrador/index');
		}	 


		function mostrar_alta() {
			$this->is_logged();
			$this->load->view('administrador/agregar');
		}

		function mostrar_baja($id) {
			$this->is_logged();	
			$profesores = $this->profesor->obtener_profesor($id); 		 
			$data['profesores'] = $profesores;
			$data['id'] = $id;
			$this->load->view('administrador/borrar', $data);
		}

		function mostrar_modificar($id){
			$this->is_logged();
			$data['profesor'] = $this->profesor->obtener_profesor($id);
			$this->load->view('administrador/modificar', $data);
		}
	}

?>


