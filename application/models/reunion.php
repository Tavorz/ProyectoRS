<?php
	class Reunion extends CI_Model {
	 
		function reunion() {
		 	$this->load->database();
		}
		 
		function get_all_reunion() {
			$reuniones = $this->db->get('reunion'); 
			return $reuniones->result();
		}

		function obtener_reunion($id) {
			$this->db->select('nombre, fecha, hora_inicio, hora_final, lugar,id');
			$this->db->from('reunion');
			$this->db->where('id = ' . $id);
			$reunion = $this->db->get();
			return $reunion->result();
		}

		function insert_reunion() {
			$data = $this->input->post();
			$this->db->insert('reunion',$data);
		}

		function delete_reunion($data) {
			$data = $_POST['nombre'];
			$this->db->where('nombre', $data);
		 	$this->db->delete('reunion');
		}


		function update_reunion($data) {
			$data = $this->input->post();


			$this->db->set('nombre', $data['nombre']);
			$this->db->set('fecha', $data['fecha']);
			$this->db->set('hora_inicio', $data['hora_inicio']);
			$this->db->set('hora_final', $data['hora_final']);
			$this->db->set('lugar', $data['lugar']);

			$this->db->where('id', $data['id']);
			$this->db->update('reunion');
		}
	}
?>

