<?php

function imprimirGeneros($generos) {
	foreach ($generos as $gen) echo "<option value=".$gen.">".$gen."</option>";
}
?>