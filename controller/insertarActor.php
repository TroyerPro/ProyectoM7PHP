<?php
session_start();
require_once  "../model/businessLayer/Class_Agencia.php";

$datosActor;
$datosActor[0] = $_REQUEST['nif'];
$datosActor[1] = $_REQUEST['nombre'];
$datosActor[2] = $_REQUEST['apellidos'];
$datosActor[3] = $_REQUEST['imagen'];
$datosActor[4] = 0;

if (isset($_REQUEST['principal'])) {
	$datosActor[4] = 1;
}

$agencia = unserialize($_SESSION['agencia']);

$agencia->insertarActor($datosActor[0], $datosActor[1],$datosActor[2] ,$datosActor[3], $datosActor[4]);
$_SESSION['agencia'] = serialize($agencia);

echo "<h1> Impresión de datos </h1>";
foreach ($datosActor as $hola) {
	echo $hola . "<br/>";
}



?>

<a href="../view/seleccionarAccion.php">Inicio</a>