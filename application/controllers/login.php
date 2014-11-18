<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Login extends CI_Controller {

		function __construct() {
		    parent::__construct();
		    $this->load->model('profesor','',TRUE);
		}

		function index() {
			$this->load->helper('form');  		
	   		$this->load->view('welcome_message.php');
	   		$this->load->library('form_validation');

		    $this->form_validation->set_rules('correo', 'correo', 'trim|required|xss_clean');
		    $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean|callback_check_database');

		    if($this->form_validation->run() == TRUE){
				redirect('administrador', 'refresh');
		    }
	 	}


	   	function check_database($password) {
	    	$correo = $this->input->post('correo');
	    	$result = $this->profesor->login($correo, $password);

		    if($result) {
		       $sess_array = array();
		       foreach($result as $row){
		         $sess_array = array(
		           'id' => $row->id,
		           'correo' => $row->correo
		        );
		        $this->session->set_userdata('logged_in', $sess_array);
		  
		       }
		      
		       return TRUE;
		    }
		    else{
		       $this->form_validation->set_message('check_database', 'No pues no');
		  
		       return false;
		    }
	    }

	    function is_logged() {
	   		if(!$this->session->userdata('logged_in')) {
	   			redirect('login', 'refresh');
	   		}
	   	}

	    function logout() {
	   		$this->session->unset_userdata('logged_in');
	   		session_destroy();
	   			   		die('A');
	   		redirect('administrador', 'refresh');
	 	}
 

	}
?>