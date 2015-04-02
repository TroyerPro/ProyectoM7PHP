<?php 

session_start();

require_once  "../model/businessLayer/Class_Agencia.php";

$agencia = unserialize($_SESSION['agencia']);
	$actor=$agencia->getActor($_POST['nif']);
	$_SESSION["actorSel"] = serialize($actor);
		include ("../view/pre_datosC.php");
		include ("../view/imprimirActor.php");
		include ("../view/post_datosC.php");
?>