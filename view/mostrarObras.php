<table class="table table-striped" border="1" style="margin-top:2%;">
	<tr><td><b>ID Obra:</b> </td> <td><?php echo $totes[$cont]->getIDObra(); ?></td></tr>
	<tr><td>Nombre obra: </td><td><?php echo $totes[$cont]->getNombre(); ?></td>	</tr>
	<tr><td>Genero: </td><td> <?php echo $totes[$cont]->getGenero(); ?></td></tr>
	<tr><td>Fecha inicio: </td><td> <?php echo $totes[$cont]->getFechaI(); ?> </td></tr>
	<tr><td>Fecha final: </td><td> <?php echo $totes[$cont]->getFechaF(); ?> </td></tr>
	<tr><td>Actores principales: </td><td> <?php echo $totes[$cont]->getActoresP(); ?> </td></tr>
	<tr><td>Actores secundarios: </td><td> <?php echo $totes[$cont]->getActoresS(); ?> </td></tr>
	<tr><td>Director: </td><td> <?php echo $totes[$cont]->getDirector(); ?> </td></tr>
</table>