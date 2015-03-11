<?php
require_once "../model/businessLayer/Class_User.php";

if(!isset($_SESSION['user'])) {
	header("Location:../index.php");
} 

$userLogged=unserialize($_SESSION['user']);

if(!$userLogged->validarUser()) {
	header("Location:../index.php");
} 

?>