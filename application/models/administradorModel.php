<?php
	class AdministradorModel extends CI_Model {
 
 		function administradorModel() {
 			parent::__construct();
 			$this->load->database();
 		}
 
		function getData() {
 			$usuarios = $this->db->get('profesor'); 
 			return $usuarios->result();
 		}


 		function insert($data) {
 			$this->db->set('RFC', $data['RFC']);
 			$this->db->set('cargoID', $data['cargoID']);
  			$this->db->set('nombre', $data['nombre']);
 			$this->db->set('apellidoPaterno', $data['apellidoPaterno']);
 			$this->db->set('apellidoMaterno', $data['apellidoMaterno']);
 			$this->db->set('correoElectronico', $data['correoElectronico']);
 			$this->db->set('password', $data['password']);
 			$this->db->insert('profesor');
 		}

 		function baja ($RFC) {
 			$this->db->where('RFC', $RFC);
 			$this->db->delete('profesor');
 		}
	}
?>