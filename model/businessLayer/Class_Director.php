<?php
include_once "Class_Persona.php";
class Director extends Persona{
	
	public function __construct($NIF, $nombre, $apellidos){
		parent::__construct($NIF, $nombre, $apellidos);
	}
}

?>