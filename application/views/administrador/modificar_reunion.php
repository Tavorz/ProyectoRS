<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>Editar</title>
		</head>
		<body>
			<form name="editar" action="<?php echo site_url("administrador/editar_reunion"); ?>" method="POST" accept-charset="UTF-8">
				<table>
					<tr>
						<td>Nombre: </td>
						<td><input name="nombre" value="<?php echo $reunion[0]->nombre;?>" type="text"/></td>
					</tr>
					<tr>
						<td>Fecha: </td>
						<td><input name="fecha" value="<?php echo $reunion[0]->fecha;?>" type="date"/></td>
					</tr>
					<tr>
						<td>Hora de inicio: </td>
						<td><input name="hora_inicio" value="<?php echo $reunion[0]->hora_inicio;?>" type="time"/></td>
					</tr>
					<tr>
						<td>Hora de finalización: </td>
						<td><input name="hora_final" value="<?php echo $reunion[0]->hora_final;?>" type="time"/></td>
					</tr>
					<tr>
						<td>Lugar: </td>
						<td><input name="lugar" value="<?php echo $reunion[0]->lugar;?>" type="text"/></td>
					</tr>

				</table>
				<input type="hidden" name="id" value="<?php echo $reunion[0]->id;?>"/>
				<input type="submit" value="editar" />
			</form>
						<br>
			<a href="<?php echo site_url("administrador/reuniones_admin"); ?>">Regresar</a>
		</body>
	</html>