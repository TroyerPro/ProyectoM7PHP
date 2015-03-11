<?php
session_start();
include "../controller/validaciones/session/valSession.php";
include "../controller/addBoostrap.php";
?>
<form action="../controller/verObra.php" method="post">
	<div name="arribaForm">
		Ver obra
	</div>
	ID obra:
	<input type="text" name="idObra">
	</input></br>
	<input type="submit" value="enviar"/>
	<input type="reset" value="cancelar"/>
</form>

<?php
include "../view/logout.php";

?>
<a href="../index.php">Inicio</a>