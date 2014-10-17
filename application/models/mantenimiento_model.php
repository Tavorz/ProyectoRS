<?php
 class mantenimiento_model extends CI_Model {
 
 function mantenimiento_model() {
 parent::__construct(); //llamada al constructor de Model.
 $this->load->database();
 }
 
function getData() {
 $usuarios = $this->db->get('profesor'); //obtenemos la tabla 'profesor'. db->get('nombre_tabla') equivale a SELECT * FROM nombre_tabla.
 
 return $usuarios->result(); //devolvemos el resultado de lanzar la query.
 }


 function login($data){
 	$usuarios = $this->db->get('profesor')->where('correoElectronico', $correoElectronico, 'password', $password);

 }

 function insert($data) {
 $this->db->set('RFC', $data['RFC']);
 $this->db->set('cargoID', $data['cargoID']);
  $this->db->set('nombre', $data['nombre']);
 $this->db->set('apellidoPaterno', $data['apellidoPaterno']);
 $this->db->set('apellidoMaterno', $data['apellidoMaterno']);
 $this->db->set('correoElectronico', $data['correoElectronico']);
 $this->db->set('password', $data['correoElectronico']);
 $this->db->insert('profesor');
 }

 function baja ($nombre) {
 $this->db->where('nombre', $nombre);
 $this->db->delete('profesor');
 }
}
?>