
<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>Principal</title>
		</head>
		<body>
				
				
				<a href="<?php echo site_url("administrador/mostrar_alta_reunion"); ?>" > Agregar Reunion</a></br></br>
				<form name="tabla" action="" method="POST">
	 				<table border="solid">
	 					<thead>
	 						<tr>
	 							<th>Nombre</th>
	 							<th>Fecha</th>
	 							<th>Hora de Inicio</th>
	 							<th>Hora de Finalización</th>
	 							<th>Lugar</th>

	 							<th>editar</th>
	 							<th>borrar</th>
	 						</tr>
	 					</thead>
	 					<tbody>
	 					<?php foreach ($reuniones as $reunion):?>
	 					<?php
	 						$reunion = array(
	 							'reunion' => $reunion
	 						);
	 						$this->load->view('administrador/row2', $reunion); 
	 					?>
	 					<?php endforeach;?>
	 					</tbody>

	 				</table>
				</form>
 		


 				<br>
 				<br>
 				<a href="<?php echo site_url("administrador/index"); ?>">Regresar</a>
 				</br></br>
				<a href="<?php echo site_url('login/logout'); ?>">Logout</a>
		</body>
	</html>

