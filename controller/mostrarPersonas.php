<?php 
session_start();


$agencia = unserialize($_SESSION['agencia']);
$totes=$agencia->getActor();

for($i=0;$i<count($totes);$i++) {
	echo serialize($totes[$i]);
	echo "<br/>";
}

?> 