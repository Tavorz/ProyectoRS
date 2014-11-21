<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>Agregar</title>
		</head>
		<body>

			<p>Agregar Reunion</p>
					<form name="alta" action="<?php echo site_url("administrador/alta_reunion"); ?>" method="POST" accept-charset="UTF-8">
						 	<table>
						 		<tr>
						 		<td>Nombre</td>
						 		<td><input type="text" name="txtNombre" required /></td>
						 		</tr>
						  		<tr>
						 		<td>Fecha</td>
						 		<td><input type="date" name="txtFecha" required/></td>
						 		</tr>
						 		<tr>
						 		<td>Hora de Inicio</td>
						 		<td><input type="time" name="txtHoraInicio" required /></td>
						 		</tr>
						 		<td>Hora Final</td>
						 		<td><input type="time" name="txtHoraFinal" required/></td>
						 		<tr>
						 		</tr>
						  		<td>Lugar</td>
						 		<td><input type="text" name="txtLugar" required /></td>
						 		<tr>
						 		</tr>
						 	</table>
						 	<input type="submit" value="agregar"/>
					</form>

		</body>
	</html>