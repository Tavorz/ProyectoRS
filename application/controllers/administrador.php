<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
 
class Administrador extends CI_Controller {
 

	 
	 function index() {

	 	if($this->session->userdata('logged_in')){
     		$session_data = $this->session->userdata('logged_in');
     		$data['correo'] = $session_data['correo'];
     		$this->load->model('profesor'); 
		 	$data['page_title'] = "Página del aministrador";
		 	$usuarios = $this->profesor->get_all(); 		 
		 	$data['usuarios'] = $usuarios;
     		$this->load->view('profesor_admin', $data);
   		}
   		else
   		{
     		redirect('login', 'refresh');
   		}
	}


	function agregar() {
		 $data['rfc'] = $_POST['txtRFC'];
		 $data['cargo'] = $_POST['txtCargo'];
		 $data['nombre'] = $_POST['txtNombre'];
		 $data['apellido_paterno'] = $_POST['txtApellidoPaterno'];
		 $data['apellido_materno'] = $_POST['txtApellidoMaterno'];
		 $data['correo'] = $_POST['txtEmail'];
		 $data['password'] = md5($_POST['txtEmail']);
		 $this->load->model('profesor');
		 $this->profesor->insert($data);
		 //volvemos a visualizar la tabla
		 $this->index();
	 }

	 
	function borrar() {
		 $rfc = $_POST['txtRFC'];
		 $this->load->model('profesor');
		 $this->profesor->delete($rfc);
		 $this->index();
	}

	function logout(){
   		$this->session->unset_userdata('logged_in');
   		session_destroy();
   		redirect('administrador', 'refresh');
 	}

 	function editar() {
		$data['id'] = $_POST['id'];
		$data['rfc'] = $_POST['txtRFC'];
		$data['cargo'] = $_POST['txtCargo'];
		$data['nombre'] = $_POST['txtNombre'];
		$data['apellido_paterno'] = $_POST['txtApellidoPaterno'];
		$data['apellido_materno'] = $_POST['txtApellidoMaterno'];
		$data['correo'] = $_POST['txtEmail'];];
		$data['password'] = md5($_POST['txtEmail']);
		$this->load->model('profesor');
		$this->profesor->update($data);
		$this->index();
		 }
	 
	 
	}
?>


