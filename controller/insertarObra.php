<?php
session_start();

require_once  "../model/businessLayer/Class_Agencia.php";
$datosObra;

$datosObra[1] = $_REQUEST['nombre'];
$datosObra[2] = $_REQUEST['genero'];
$datosObra[3] = $_REQUEST['data1'];
$datosObra[4] = $_REQUEST['data2'];
$datosObra[5] = $_REQUEST['actores_principales'];
$datosObra[6] = $_REQUEST['actores_secundarios'];
$datosObra[7] = $_REQUEST['opcion'];

print_r($datosObra[5]);
print_r($datosObra[6]);

$actoresPrincipales = "";
$actoresSecundarios = "";

foreach ($datosObra[5] as $key) {

	if($actoresPrincipales == "") {
		$actoresPrincipales = $key;
	} else {
		$actoresPrincipales = $actoresPrincipales .",".$key;
	}

}

foreach ($datosObra[6] as $key) {
	if($actoresSecundarios == "") {
		$actoresSecundarios = $key;
	} else {
		$actoresSecundarios = $actoresSecundarios.",".$key;
	}
}

$agencia = unserialize($_SESSION['agencia']);

$agencia->insertarObra($datosObra[1],$datosObra[2] ,$datosObra[3], $datosObra[4],$actoresPrincipales,$actoresSecundarios,$datosObra[7]);

$_SESSION['agencia'] = serialize($agencia);

echo "<h1> INSERTADO LOLOL de datos </h1>";



?>


<a href="../view/seleccionarAccion.php">Inicio</a>