<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>Principal</title>
		</head>
		<body>
				
				
				<a href="<?php echo site_url("administrador/mostrar_alta"); ?>" > Agregar </a></br></br>
				<form name="tabla" action="<?php echo site_url("administrador/mostrar_modificar"); ?>" method="POST">
	 				<table border="solid">
	 					<thead>
	 						<tr>
	 							<th>RFC</th>
	 							<th>Cargo</th>
	 							<th>Nombre</th>
	 							<th>Apellido Paterno</th>
	 							<th>Apellido Materno</th>
	 							<th>Correo</th>
	 							<th>editar</th>
	 							<th>borrar</th>
	 						</tr>
	 					</thead>
	 					<tbody>
	 					<?php foreach ($profesores as $profesor):?>
	 					<?php
	 						$profesor = array(
	 							'profesor' => $profesor 
	 						);
	 						$this->load->view('administrador/row', $profesor); 
	 					?>
	 					<?php endforeach;?>
	 					</tbody>

	 				</table>
				</form>
 				<br>
				<a href="<?php echo site_url('login/logout'); ?>">Logout</a>
		</body>
	</html>

