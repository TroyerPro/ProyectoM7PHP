<?php 

session_start();

require_once  "../model/businessLayer/Class_Agencia.php";

$agencia = unserialize($_SESSION['agencia']);
	$obra=$agencia->getObra($_POST['idObra']);
		if(!$obra) {
		?>
		<script>alert("La obra no existe. Id obra inexistente/incorrecta");
			window.location.href = "../view/verObra.php";
		</script>
		<?php
	}
	$_SESSION["obraSel"] = serialize($obra);
		include ("../view/pre_datosC.php");
		include ("../view/imprimirObra.php");
		include ("../view/post_datosC.php");
?>