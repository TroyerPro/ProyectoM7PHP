<?php
include "../controller/addBoostrap.php";
include "../controller/consultarGeneros.php";
include "../controller/validaciones/session/valSession.php";
session_start();

if(cualquierUser($_SESSION['user'],$_SESSION['password'])) {
?>

<div class="col-xs-8 col-xs-offset-2">
<form action="../controller/insertarActor.php" method="post">
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
	Imagen:
	<input type="text" name="imagen">
	</input>
	<br/>
	Principal:
	<input type="checkbox" name="principal" >
	</input>
	<br/>
	<input type="submit" value="enviar"/>
	<input type="reset" value="cancelar"/>
</form>

<?php
include "../view/logout.php";
 } else {
	//header("Location:login.php");
	echo "error";
	}

?>

<a href="../index.php">Inicio</a>
</div>