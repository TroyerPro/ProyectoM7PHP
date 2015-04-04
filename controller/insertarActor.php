<?php
session_start();
require_once  "../model/businessLayer/Class_Agencia.php";

if($_REQUEST['nif'] == null || $_REQUEST['nombre'] == null || $_REQUEST['apellidos'] == null || $_REQUEST['imagen'] == null) {
?>
<script type='text/javascript'>
	alert('Todos los campos son obligatorios.');
	window.location.href = "../view/crearActor.php";
</script>
<?php
}

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


$actor = new Actor($datosActor[0], $datosActor[1],$datosActor[2] ,$datosActor[3], $datosActor[4]);

		include ("../view/pre_datosC.php");
		include ("../view/imprimirActor.php");
		include ("../view/post_datosC.php");


?>
<script>alert("Actor creado.");</script>