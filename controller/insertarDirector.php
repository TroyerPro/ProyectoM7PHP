<?php
session_start();

$datosDirector;
$datosDirector[0] = $_REQUEST['nif'];
$datosDirector[1] = $_REQUEST['nombre'];
$datosDirector[2] = $_REQUEST['apellidos'];

$agencia = unserialize($_SESSION['agencia']);

$agencia->insertarDirector($datosDirector[0], $datosDirector[1],$datosDirector[2]);
$_SESSION['agencia'] = serialize($agencia);

echo "<h1> Impresión de datos </h1>";
foreach ($datosDirector as $hola)
	echo $hola . "<br/>";
?>


<a href="../index.php">Inicio</a>