<?php
//Consultas MYSQL
$actorDatos="DatosBuscadosEnBBDD";
$NIF_actor = $_POST['nif'];

foreach ($actor as $key => $value) {
	# code...
}
echo ("Datos del Actor con el NIF: ".$NIF_actor."<br/>".$actorDatos);
?>