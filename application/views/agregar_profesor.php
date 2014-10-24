<!DOCTYPE html>
<html>
<head>
	<title>Agregar</title>
</head>
<body>

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

</body>
</html>