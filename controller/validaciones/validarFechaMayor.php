<?php
function validarFechaMayor($intro) {

if($intro instanceof Date == false) {
	return false;
}

if($intro<Date.Now) {

return false;
}

return true;
}

?>