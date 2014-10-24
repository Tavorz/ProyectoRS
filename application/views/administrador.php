<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title><?=$page_title?></title>
		</head>
		<body>
			<form name="tabla" action="" method="POST">
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
 					<?php foreach ($usuarios as $u):?>
 					<tr>
 						<!-- <td><input type="radio" name="editar" value="<?=$u->RFC?>"/></td> -->
  						<td><?=$u->RFC?></td>
						<td><?=$u->cargoID?></td>
						<td><?=$u->nombre?></td>
						<td><?=$u->apellidoPaterno?></td>
						<td><?=$u->apellidoMaterno?></td>
						<td><?=$u->correoElectronico?></td>
 					</tr>
 					<?php endforeach;?>
 					</tbody>
 				</table>
 					<input type="submit" value="Editar" />
 			</form>

			<p>Agregar  Profesor</p>
			<form name="agregar" action="http://localhost/ProyectoRS/index.php/administrador/agregar" method="POST" accept-charset="UTF-8">
				 	<table>
				 		<tr>
				 		<td>RFC</td>
				 		<td><input type="text" name="txtRFC" /></td>
				 		</tr>
				  		<tr>
				 		<td>Cargo</td>
				 		<td><input type="text" name="txtCargo" /></td>
				 		</tr>
				 		<tr>
				 		<td>Nombre</td>
				 		<td><input type="text" name="txtNombre" /></td>
				 		</tr>
				 		<td>Apellido Paterno</td>
				 		<td><input type="text" name="txtApellidoPaterno" /></td>
				 		<tr>
				 		</tr>
				  		<td>Apellido Materno</td>
				 		<td><input type="text" name="txtApellidoMaterno" /></td>
				 		<tr>
				 		</tr>
				 		<td>Email</td>
				 		<td><input type="email" name="txtEmail" /></td>
				 		<tr>
				 		</tr>
				 	</table>
				 	<input type="submit" value="agregar"/>
			</form>

			<p>Baja de Profesor</p>
				<form name="baja" action="http://localhost/ProyectoRS/index.php/administrador/baja" method="POST">
					 <table>
					 <tr>
					 <td>RFC: </td><td><input name="txtRFC" type="text"/></td>
					 </tr>
					 </table>
					 <input type="submit" value="Borrar" />
				</form>
		</body>
	</html>






