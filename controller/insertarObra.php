<?php
session_start();

require_once  "../model/businessLayer/Class_Agencia.php";
$datosObra;

$datosObra[1] = $_REQUEST['nombre'];
$datosObra[2] = $_REQUEST['genero'];
$datosObra[3] = $_REQUEST['fechaInicio'];
$datosObra[4] = $_REQUEST['fechaFinal'];
$datosObra[5] = $_REQUEST['actores_principales'];
$datosObra[6] = $_REQUEST['actores_secundarios'];
$datosObra[7] = $_REQUEST['director'];

$agencia = unserialize($_SESSION['agencia']);

$agencia->insertarObra($datosObra[1],$datosObra[2] ,$datosObra[3], $datosObra[4],$datosObra[5],$datosObra[6],$datosObra[7]);
$_SESSION['agencia'] = serialize($agencia);

echo "<h1> Impresión de datos </h1>";
foreach ($datosObra as $hola)
	echo $hola . "<br/>";
?>

<a href="../index.php">Inicio</a>