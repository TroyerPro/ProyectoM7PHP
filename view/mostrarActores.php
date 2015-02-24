<table border="1" style="margin-top:2%;">
	<tr><td><b>NIF: </td> <td><?php echo $totes[$cont]->getNIF(); ?></td></tr>
	<tr><td>Nombre: </td><td><?php echo $totes[$cont]->getNombre(); ?></td>	</tr>
	<tr><td>Apellidos: </td><td> <?php echo $totes[$cont]->getApellidos(); ?></td></tr>
	<tr><td>img: </td><td> <?php echo $totes[$cont]->getImg(); ?> </td></tr>
	<tr><td>Principal: </td><td> <?php echo $totes[$cont]->getPrincipal(); ?> </td></tr>
</table>
