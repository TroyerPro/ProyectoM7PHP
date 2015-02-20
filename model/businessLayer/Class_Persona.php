<?php
class Persona {

	private $NIF;
	private $nombre;
	private $apellidos;

	public function __construct($NIF, $nombre, $apellidos) {
		$this->NIF=$NIF;
		$this->nombre=$nombre;
		$this->apellidos=$apellidos;
	}

	public function getNIF(){
		return $this->NIF;
	}

	public function setNIF($NIF){
		$this->NIF = $NIF;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getApellidos(){
		return $this->apellidos;
	}

	public function setApellidos($apellidos){
		$this->apellidos = $apellidos;
	}

}
?>