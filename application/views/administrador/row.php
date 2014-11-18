<tr>
	<td><?php echo $profesor->rfc; ?></td>
	<td><?php echo $profesor->cargo; ?></td>
	<td><?php echo $profesor->nombre; ?></td>
	<td><?php echo $profesor->apellido_paterno; ?></td>
	<td><?php echo $profesor->apellido_materno; ?></td>
	<td><?php echo $profesor->correo; ?></td>

	<td><a href="<?php echo site_url("administrador/mostrar_modificar/$profesor->id"); ?>">Editar </a></td>
	<td><a href="<?php echo site_url("administrador/mostrar_baja/$profesor->id"); ?>">borrar</a></td>
</tr>