<?php
 class Profesor extends CI_Model{
 
	function profesor(){
	 	$this->load->database();
	}
	 
	function get_all(){
		$usuarios = $this->db->get('profesor'); 
		return $usuarios->result();
	}

	function insert($data) {
		$this->db->set('rfc', $data['rfc']);
		$this->db->set('cargo', $data['cargo']);
		$this->db->set('nombre', $data['nombre']);
		$this->db->set('apellido_paterno', $data['apellido_paterno']);
		$this->db->set('apellido_materno', $data['apellido_materno']);
		$this->db->set('correo', $data['correo']);
		$this->db->set('password', $data['password']);
		$this->db->insert('profesor');
	}

	function delete($rfc){
		$this->db->where('rfc',$rfc);
	 	$this->db->delete('profesor');
	}


	function update($data) {
		$this->db->set('rfc', $data['rfc']);
		$this->db->set('cargo', $data['cargo']);
		$this->db->set('nombre', $data['nombre']);
		$this->db->set('apellido_paterno', $data['apellido_paterno']);
		$this->db->set('apellido_materno', $data['apellido_materno']);
		$this->db->set('correo', $data['correo']);;
		$this->db->where('id', $data['id']);
		$this->db->update('profesor');
	}

	function login($correo, $password){
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

