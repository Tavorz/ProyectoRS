<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Login extends CI_Controller {

		function index(){
			$this->load->helper('form');
	   		
	   		$this->load->view('welcome_message.php');
	 	}
	}
?>