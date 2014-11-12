<?php
	class Profesor extends CI_Model {
	 
		function profesor() {
		 	$this->load->database();
		}
		 
		function get_all() {
			$usuarios = $this->db->get('profesor'); 
			return $usuarios->result();
		}

		function obtener_profesor($id) {
			$this->db->select('rfc, cargo, nombre, apellido_paterno, apellido_materno, correo, password, id');
			$this->db->from('profesor');
			$this->db->where('id = ' . $id);
			$profesor = $this->db->get();
			return $profesor->result();
		}

		function insert() {
			$data['rfc'] = $_POST['txtRFC'];
			$data['cargo'] = $_POST['txtCargo'];
			$data['nombre'] = $_POST['txtNombre'];
			$data['apellido_paterno'] = $_POST['txtApellidoPaterno'];
			$data['apellido_materno'] = $_POST['txtApellidoMaterno'];
			$data['correo'] = $_POST['txtEmail'];
			$data['password'] = md5($_POST['txtEmail']);

			$this->db->set('rfc', $data['rfc']);
			$this->db->set('cargo', $data['cargo']);
			$this->db->set('nombre', $data['nombre']);
			$this->db->set('apellido_paterno', $data['apellido_paterno']);
			$this->db->set('apellido_materno', $data['apellido_materno']);
			$this->db->set('correo', $data['correo']);
			$this->db->set('password', $data['password']);
			$this->db->insert('profesor');
		}

		function delete($data) {
			$data = $_POST['txtRFC'];
			$this->db->where('rfc', $data);
		 	$this->db->delete('profesor');
		}


		function update($data) {
			$data['id'] = $_POST['id'];
			$data['rfc'] = $_POST['txtRFC'];
			$data['cargo'] = $_POST['txtCargo'];
			$data['nombre'] = $_POST['txtNombre'];
			$data['apellido_paterno'] = $_POST['txtApellidoPaterno'];
			$data['apellido_materno'] = $_POST['txtApellidoMaterno'];
			$data['correo'] = $_POST['txtEmail'];
			$data['password'] =md5($_POST['txtPassword']);

			$this->db->set('rfc', $data['rfc']);
			$this->db->set('cargo', $data['cargo']);
			$this->db->set('nombre', $data['nombre']);
			$this->db->set('apellido_paterno', $data['apellido_paterno']);
			$this->db->set('apellido_materno', $data['apellido_materno']);
			$this->db->set('correo', $data['correo']);;
			$this->db->set('password', $data['password']);;
			$this->db->where('id', $data['id']);
			$this->db->update('profesor');
		}

		function login($correo, $password) {
	   		$this->db-> select('id, rfc, password');
	   		$this->db-> from('profesor');
	   		$this->db-> where('correo', $correo);
	   		$this->db-> where('password', MD5($password));
	   		$query = $this->db->get();

	   		if($query -> num_rows())
	   			{
	     			return $query->result();
	   			}
	   		else
	   		{
	     		return false;
	   		}
	 	}
	}
?>

