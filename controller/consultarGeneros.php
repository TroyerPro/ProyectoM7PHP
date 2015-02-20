<?php

function consultarGeneros() {
//consulta BBDD donde estan todos los generos y devuelve un array
return $generos = ["Miedo","Aventura","Comedia","Suspense"];
}

function imprimirGeneros() {
	$generos = consultarGeneros();
	foreach ($generos as $gen) echo "<option value=".$gen.">".$gen."</option>";
}
?>