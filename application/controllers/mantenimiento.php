<?php
 
class Mantenimiento extends CI_Controller {
 
 public function __construct() {
 parent::__construct();
 }
 
 function index() {
 $this->load->model('mantenimiento_model'); //cargamos el modelo
 
 $data['page_title'] = "Holis";
 
 //Obtener datos de la tabla 'contacto'
 $usuarios = $this->mantenimiento_model->getData(); //llamamos a la función getData() del modelo creado anteriormente.
 
 $data['usuarios'] = $usuarios;
 
 //load de vistas
 $this->load->view('mantenimiento_view', $data); //llamada a la vista, que crearemos posteriormente
 }
 
}
 
?>