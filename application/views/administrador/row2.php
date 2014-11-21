<tr>
	<td><?php echo $reunion->nombre; ?></td>
	<td><?php echo $reunion->fecha; ?></td>
	<td><?php echo $reunion->hora_inicio; ?></td>
	<td><?php echo $reunion->hora_final; ?></td>
	<td><?php echo $reunion->lugar; ?></td>


	<td><a href="<?php echo site_url("administrador/mostrar_modificar_reunion/$reunion->id"); ?>">Editar </a></td>
	<td><a href="<?php echo site_url("administrador/mostrar_baja_reunion/$reunion->id"); ?>">borrar</a></td>
</tr>