<?php
function valName($string) {
	if (!preg_match('/[^A-Za-z]/', $string)) {
	 	return true;
	} else {
		return false;
	}
}

?>