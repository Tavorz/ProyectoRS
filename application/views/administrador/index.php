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
	 					<tr>
	  						<td><?=$profesor->rfc?></td>
							<td><?=$profesor->cargo?></td>
							<td><?=$profesor->nombre?></td>
							<td><?=$profesor->apellido_paterno?></td>
							<td><?=$profesor->apellido_materno?></td>
							<td><?=$profesor->correo?></td>

							<td><a href="<?php echo site_url("administrador/mostrar_modificar/$profesor->id"); ?>">Editar </a></td>
							<td><a href="http://localhost/ProyectoRS/index.php/administrador/mostrar_baja/<?=$profesor->id?>">borrar</a></td>
							
	 					</tr>
	 					<?php endforeach;?>
	 					</tbody>

	 				</table>
				</form>
 				<br>
				<a href="<?php echo site_url('administrador/logout'); ?>">Logout</a>
		</body>
	</html>

