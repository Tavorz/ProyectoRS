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


	function alta() {
 //recogemos los datos obtenidos por POST
 $data['RFC'] = $_POST['txtRFC'];
 $data['cargoID'] = $_POST['txtCargo'];
 $data['nombre'] = $_POST['txtNombre'];
 $data['apellidoPaterno'] = $_POST['txtApellidoPaterno'];
 $data['apellidoMaterno'] = $_POST['txtApellidoMaterno'];
 $data['correoElectronico'] = $_POST['txtEmail'];
 $data['password'] = md5($_POST['txtEmail']);
 //llamamos al modelo, concretamente a la función insert() para que nos haga el insert en la base de datos.
 $this->load->model('mantenimiento_model');
 $this->mantenimiento_model->insert($data);
 //volvemos a visualizar la tabla
 $this->index();
 }

 function baja() {
 //obtenemos el nombre
 $RFC = $_POST['txtRFC'];
 //cargamos el modelo y llamamos a la función baja(), pasándole el nombre del registro que queremos borrar.
 $this->load->model('mantenimiento_model');
 $this->mantenimiento_model->baja($RFC);
 //mostramos la vista de nuevo.
 $this->index();
 }
 
 function agregar(){
 	echo "Agregar";
 }
 
}





 


?>