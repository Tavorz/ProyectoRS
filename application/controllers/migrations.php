<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Migrations extends CI_Controller {

		function migrar() {

			$this->load->library('migration');

			if ( ! $this->migration->current())
			{
				show_error($this->migration->error_string());
			}
		}
	}
?>







