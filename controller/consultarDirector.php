<?php 

session_start();

require_once  "../model/businessLayer/Class_Agencia.php";
$agencia = unserialize($_SESSION['agencia']);
	$totes=$agencia->getArrayDirectores();
	$cont = 0;
	include ("../view/pre_datosC.php");
	while($cont < count($totes)){ 
		?><?php include("../view/mostrarDirectores.php"); ?><?php
		$cont++;
	}
	include ("../view/post_datosC.php");			
?>