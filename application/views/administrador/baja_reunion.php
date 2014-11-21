<!DOCTYPE html>
	<html>
		<head>
		<meta charset="UTF-8">
			<title>Borrar</title>
		</head>
		<body>


 	         <p>Borrar Reunion</p>
 	         
			<form name="borrar" action="<?php echo site_url("administrador/borrar_reunion"); ?>" method="POST">
				<table border="solid">
	 				<thead>
	 					<tr>
	 						<th>Nombre</th>
	 						<th>Fecha</th>
	 						<th>Hora de Inicio</th>
	 						<th>Hora de Finalización</th>
							<th>Lugar</th>
							
	 						</tr>
	 					</thead>
	 					<tbody>
	 					<?php foreach ($reuniones as $reunion):?>
							<td><?php echo $reunion->nombre; ?></td>
							<td><?php echo $reunion->fecha; ?></td>
							<td><?php echo $reunion->hora_inicio; ?></td>
							<td><?php echo $reunion->hora_final; ?></td>
							<td><?php echo $reunion->lugar; ?></td>
	 					<?php endforeach;?>
	 					</tbody>

	 			</table>

	 			<br>

	 			Para confirmar ingresa el nombre de la junta
	 			<table>
					<tr>
						<td>Nombre: </td><td><input name="nombre" type="text"/></td>
					</tr>
				</table>
			 	<input type="submit" value="Borrar" />
			</form>

						<br>
			<a href="<?php echo site_url("administrador/reuniones_admin"); ?>">Regresar</a>
		</body>
	</html>
