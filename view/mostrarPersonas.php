<?php 
session_start();
function __autoload($class_name) {
    require_once "../model/businessLayer/Class_".$class_name.".php";
}

$agencia = unserialize($_SESSION['agencia']);
$totes=$agencia->getActor();

for($i=0;$i<count($totes);$i++) {
	echo serialize($totes[$i]);
	echo "<br/>";
}

?> 