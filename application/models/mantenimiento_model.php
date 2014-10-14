<?php
 class mantenimiento_model extends CI_Model {
 
 function mantenimiento_model() {
 parent::__construct(); //llamada al constructor de Model.
 }
 
function getData() {
 $usuarios = $this->db->get('profesor'); //obtenemos la tabla 'contacto'. db->get('nombre_tabla') equivale a SELECT * FROM nombre_tabla.
 
 return $usuarios->result(); //devolvemos el resultado de lanzar la query.
 }
}
?>