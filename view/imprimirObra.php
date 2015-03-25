

<table class="table table-striped" border="1" style="margin-top:2%;">
	<tr><td><b>ID Obra: </td> <td><?php echo $obra->getIDObra(); ?></td></tr>
	<tr><td>Nombre obra: </td><td><?php echo $obra->getNombre(); ?></td>	</tr>
	<tr><td>Genero: </td><td> <?php echo $obra->getGenero(); ?></td></tr>
	<tr><td>Fecha inicio: </td><td> <?php echo $obra->getFechaI(); ?> </td></tr>
	<tr><td>Fecha final: </td><td> <?php echo $obra->getFechaF(); ?> </td></tr>
	<tr><td>Actores principales: </td><td> <?php echo $obra->getActoresP(); ?> </td></tr>
	<tr><td>Actores secundarios: </td><td> <?php echo $obra->getActoresS(); ?> </td></tr>
	<tr><td>Director: </td><td> <?php echo $obra->getDirector(); ?> </td></tr>
</table>

<a href="../controller/imprimirObraPDF.php">Imprimir pdf</a>

