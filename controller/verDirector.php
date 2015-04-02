<?php 

session_start();

require_once  "../model/businessLayer/Class_Agencia.php";

$agencia = unserialize($_SESSION['agencia']);
	$director=$agencia->getDirector($_POST['nif']);
	$_SESSION["directorSel"] = serialize($director);
		include ("../view/pre_datosC.php");
		include ("../view/imprimirDirector.php");
		include ("../view/post_datosC.php");
?>