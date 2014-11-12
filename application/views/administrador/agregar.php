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
				 		<td><input type="text" name="txtRFC" required /></td>
				 		</tr>
				  		<tr>
				 		<td>Cargo</td>
				 		<td><input type="text" name="txtCargo" required/></td>
				 		</tr>
				 		<tr>
				 		<td>Nombre</td>
				 		<td><input type="text" name="txtNombre" required /></td>
				 		</tr>
				 		<td>Apellido Paterno</td>
				 		<td><input type="text" name="txtApellidoPaterno" required/></td>
				 		<tr>
				 		</tr>
				  		<td>Apellido Materno</td>
				 		<td><input type="text" name="txtApellidoMaterno" required /></td>
				 		<tr>
				 		</tr>
				 		<td>Email</td>
				 		<td><input type="email" name="txtEmail" required/></td>
				 		<tr>
				 		</tr>
				 	</table>
				 	<input type="submit" value="agregar"/>
			</form>

</body>
</html>