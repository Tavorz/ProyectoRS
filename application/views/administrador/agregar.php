<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Agregar</title>
</head>
<body>

	<p>Agregar  Profesor</p>
			<form name="agregar" action="<?php echo site_url("administrador/agregar"); ?>" method="POST" accept-charset="UTF-8">
				 	<table>
				 		<tr>
				 		<td>RFC</td>
				 		<td><input type="text" name="rfc" required /></td>
				 		</tr>
				  		<tr>
				 		<td>Cargo</td>
				 		<td><input type="text" name="cargo" required/></td>
				 		</tr>
				 		<tr>
				 		<td>Nombre</td>
				 		<td><input type="text" name="nombre" required /></td>
				 		</tr>
				 		<td>Apellido Paterno</td>
				 		<td><input type="text" name="apellido_paterno" required/></td>
				 		<tr>
				 		</tr>
				  		<td>Apellido Materno</td>
				 		<td><input type="text" name="apellido_materno" required /></td>
				 		<tr>
				 		</tr>
				 		<td>Email</td>
				 		<td><input type="email" name="correo" required/></td>
				 		<tr>
				 		</tr>
				 	</table>
				 	<input type="submit" value="agregar"/>
			</form>

			<br>
			<a href="<?php echo site_url("administrador/profesores_admin"); ?>">Regresar</a>

</body>
</html>