<?php 

session_start();

require_once  "../model/businessLayer/Class_Agencia.php";
$agencia = unserialize($_SESSION['agencia']);
	$obra=$agencia->getObra($_POST['idObra']);
	$_SESSION["obraSel"] = serialize($obra);

	include ("../view/imprimirObra.php");
		
?>