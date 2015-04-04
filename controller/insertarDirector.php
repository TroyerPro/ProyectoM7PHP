<?php
session_start();

require_once  "../model/businessLayer/Class_Agencia.php";


if($_REQUEST['nif'] == null || $_REQUEST['nombre'] == null || $_REQUEST['apellidos'] == null) {
?>
<script type='text/javascript'>
	alert('Todos los campos son obligatorios.');
	window.location.href = "../view/crearDirector.php";
</script>
<?php
}

$datosDirector;
$datosDirector[0] = $_REQUEST['nif'];
$datosDirector[1] = $_REQUEST['nombre'];
$datosDirector[2] = $_REQUEST['apellidos'];



$agencia = unserialize($_SESSION['agencia']);

$agencia->insertarDirector($datosDirector[0], $datosDirector[1],$datosDirector[2]);
$_SESSION['agencia'] = serialize($agencia);

$director = new Director($datosDirector[0], $datosDirector[1],$datosDirector[2]);
		include ("../view/pre_datosC.php");
		include ("../view/imprimirDirector.php");
		include ("../view/post_datosC.php");
?>
<script>alert("Director creado.");</script>