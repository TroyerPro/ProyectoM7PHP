<?php
function valAdmin($user, $password) {
	if ($user == "admin" && $password == "123") {
		return true;
	} else {
		return false;
	}
}

function valSecretario($user, $password) {
	if ($user == "secre" && $password == "123") {
		return true;
	} else {
		return false;
	}
}

function cualquierUser($user,$password) {
	
	if(valAdmin($user,$password)) {
		return true;
	}
	if(valSecretario($user,$password)) {
		return true;
	}
	
	return false;
}
?>