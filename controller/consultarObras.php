<?php 
session_start();
function __autoload($class_name) {
    require_once "../model/businessLayer/Class_".$class_name.".php";
}

$agencia = unserialize($_SESSION['agencia']);
	$totes=$agencia->getArrayObras();
	$cont = 0;
	while($cont < count($totes)){ 
		?><?php include($_SERVER['DOCUMENT_ROOT']."/proyecto/view/mostrarObras.php"); ?><?php
		$cont++;
	}			
?>


