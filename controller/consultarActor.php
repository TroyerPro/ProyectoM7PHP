<?php 

session_start();

require_once  "../model/businessLayer/Class_Agencia.php";
$agencia = unserialize($_SESSION['agencia']);
	$totes=$agencia->getArrayActores();
	$cont = 0;
	while($cont < count($totes)){ 
		?><?php include("../view/mostrarActores.php"); ?><?php
		$cont++;
	}			
?>