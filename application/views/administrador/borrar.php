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

	 						
	  						<td><?=$profesor->rfc?></td>
							<td><?=$profesor->cargo?></td>
							<td><?=$profesor->nombre?></td>
							<td><?=$profesor->apellido_paterno?></td>
							<td><?=$profesor->apellido_materno?></td>
							<td><?=$profesor->correo?></td>
	 					</tr>
	 					<?php endforeach;?>
	 					</tbody>

	 			</table>

	 			Para confirmar ingresa el RFC
	 			<table>
					<tr>
						<td>RFC: </td><td><input name="txtRFC" type="text"/></td>
					</tr>
				</table>
			 	<input type="submit" value="Borrar" />
			</form>
		</body>
	</html>

					