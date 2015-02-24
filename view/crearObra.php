<?php
session_start();
require_once "../controller/addBoostrap.php";
require_once "../controller/consultarGeneros.php";
require_once "../controller/validaciones/session/valSession.php";


if(cualquierUser($_SESSION['user'],$_SESSION['password'])) {
?>

<div class="col-xs-8 col-xs-offset-2">
<form action="../controller/insertarObra.php" method="post">
<br/>
	Nombre:
	<input type="text" name="nombre">
	</input>
	<br/>
	Genero:
	<select name="genero">
		<?php
		imprimirGeneros();
		?>
	</select>
	<br/>
	//Pendiente validar fecha inicio > fecha hoy
	Fecha incio
	<input type="text" name="fechaInicio">
	</input>
	<br/>
	//Pendiente validar fecha final > fecha inicio
	Fecha final
	<input type="text" name="fechaFinal">
	</input>
	<br/>
	Actores principales
	<textarea name="actores_principales" COLS=40 ROWS=6/>
	</textarea>
	<br/>
	Actores secundarios
	<textarea name="actores_secundarios" COLS=40 ROWS=6></textarea>
	<br/>
	Director
	<input type="text" name="director">
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