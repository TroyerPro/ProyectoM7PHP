<?php
class Genero{

	private $IDgenero;
	private $descripcion;

	public function __construct($IDgenero, $descripcion) {
		$this->IDgenero=$IDgenero;
		$this->descripcion=$descripcion;
	}
	
	public function getIDgenero(){
		return $this->IDgenero;
	}

	public function setIDgenero($IDgenero){
		$this->IDgenero = $IDgenero;
	}

	public function getDescripcion(){
		return $this->descripcion;
	}

	public function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}
}

?>