<!DOCTYPE html>
	<html>
		<head>
		<meta charset="UTF-8">
			<title>Borrar</title>
		</head>
		<body>


 	         <p>Borrar profesor</p>
 	         <?php echo $id; ?>
			<form name="borrar" action="<?php echo site_url("administrador/borrar"); ?>" method="POST">
				<table border="solid">
	 				<thead>
	 					<tr>
	 						<th>RFC</th>
	 						<th>Cargo</th>
	 						<th>Nombre</th>
	 						<th>Apellido Paterno</th>
							<th>Apellido Materno</th>
							<th>Correo</th>
	 						</tr>
	 					</thead>
	 					<tbody>
	 					<?php foreach ($profesores as $profesor):?>
	 					<tr>

	 						
	  						<td><?php echo $profesor->rfc;?></td>
							<td><?php echo $profesor->cargo;?></td>
							<td><?php echo $profesor->nombre;?></td>
							<td><?php echo $profesor->apellido_paterno;?></td>
							<td><?php echo $profesor->apellido_materno;?></td>
							<td><?php echo $profesor->correo;?></td>
	 					</tr>
	 					<?php endforeach;?>
	 					</tbody>

	 			</table>

	 			Para confirmar ingresa el RFC
	 			<table>
					<tr>
						<td>RFC: </td><td><input name="rfc" type="text"/></td>
					</tr>
				</table>
			 	<input type="submit" value="Borrar" />
			</form>

						<br>
			<a href="<?php echo site_url("administrador/profesores_admin"); ?>">Regresar</a>
		</body>
	</html>

					