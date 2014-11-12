<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>Editar</title>
		</head>
		<body>
			<form name="editar" action="<?php echo site_url("administrador/editar"); ?>r" method="POST" accept-charset="UTF-8">
				<table>
					<tr>
						<td>RFC: </td><td><input name="txtRFC" value="<?=$profesor[0]->rfc?>" type="text"/></td>
					</tr>
					<tr>
						<td>Cargo: </td><td><input name="txtCargo" value="<?=$profesor[0]->cargo?>" type="text"/></td>
					</tr>
					<tr>
						<td>Nombre: </td><td><input name="txtNombre" value="<?=$profesor[0]->nombre?>" type="text"/></td>
					</tr>
					<tr>
						<td>Apellido Paterno: </td><td><input name="txtApellidoPaterno" value="<?=$profesor[0]->apellido_paterno?>" type="text"/></td>
					</tr>
					<tr>
						<td>Apellido Materno: </td><td><input name="txtApellidoMaterno" value="<?=$profesor[0]->apellido_materno?>" type="text"/></td>
					</tr>
					<tr>
						<td>Correo: </td><td><input name="txtEmail" value="<?=$profesor[0]->correo?>" type="text"/></td>
					</tr>
					<tr>
						<td>Contraseña: </td><td><input name="txtPassword" value="" type="text"/></td>
					</tr>
				</table>
				<input type="hidden" name="id" value="<?=$profesor[0]->id?>"/>
				<input type="submit" value="editar" />
			</form>
		</body>
	</html>