<?php
include "../controller/addBoostrap.php";

include "../controller/validaciones/session/valSession.php";
session_start();
?>

<div class="col-xs-8 col-xs-offset-2">
<form action="../controller/insertarDirector.php" method="post">
	NIF:
	<input type="text" name="nif">
	</input>
	<br/>
	Nombre:
	<input type="text" name="nombre">
	</input>
	<br/>
	Apellidos:
	<input type="text" name="apellidos">
	</input>
	<br/>
	<input type="submit" value="enviar"/>
	<input type="reset" value="cancelar"/>
</form>

<?php
include "../view/logout.php";
?>

<a href="../index.php">Inicio</a>
</div>