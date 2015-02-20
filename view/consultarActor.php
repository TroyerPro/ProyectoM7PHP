<?php
session_start();
include "../controller/consultarGeneros.php";
include "../controller/validaciones/session/valSession.php";
include "../controller/addBoostrap.php";
if(cualquierUser(($_SESSION['user']),$_SESSION['password'])) {
?>
<form action="../controller/consultarActor.php" method="post">
	<div name="arribaForm">
		Introduce los datos del actor
	</div>
	NIF:
	<input type="text" name="nif">
	</input></br>
	<input type="submit" value="enviar"/>
	<input type="reset" value="cancelar"/>
</form>

<?php
include "../view/logout.php";
} else {
	header("Location:login.php");
}
?>
<a href="../index.php">Inicio</a>