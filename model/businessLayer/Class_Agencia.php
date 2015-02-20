<?php
include_once($_SERVER['DOCUMENT_ROOT']."/clase/ProyectoM7PHP/model/DAO/Class_Actordb.php");
include_once($_SERVER['DOCUMENT_ROOT']."/clase/ProyectoM7PHP/model/DAO/Class_Obradb.php");
include_once($_SERVER['DOCUMENT_ROOT']."/clase/ProyectoM7PHP/model/DAO/Class_Agenciadb.php");
class Agencia{

	private $nombre;
	private $direccion;
	private $telefono;
	private $obra;
	private $actor;
	private $director;

	public function __construct($nombre, $direccion,$telefono) {
		$this->nombre=$nombre;
		$this->direccion=$direccion;
		$this->telefono=$telefono;
		$this->obra = array();
		$this->actor = array();
		$this->director = array();
	}
	
	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getDireccion(){
		return $this->direccion;
	}

	public function setDireccion($direccion){
		$this->direccion = $direccion;
	}

	public function getTelefono(){
		return $this->telefono;
	}

	public function setTelefono($telefono){
		$this->telefono = $telefono;
	}

	public function getObra(){
		return $this->obra;
	}

	public function getActor(){
		return $this->actor;
	}

	public function setObra($obra){
		return $this->obra = $obra;
	}

	public function setPersona($actor){
		return $this->actor=$actor;
	}

		public function getDirector(){
		return $this->director;
	}

	public function setDirector($director){
		return $this->director = $director;
	}

	public function populateAgencia() {
		
			$agencia = unserialize($_SESSION['agencia']);
			$totes=$agencia->getArrayObras();
			$agencia->setObra($totes);
			$_SESSION['agencia']=serialize($agencia);

	}

	public function getArrayObras() {
		$agenciaDb = new Agenciadb();
		$arrayObras = $agenciaDb->getObras();
		return $arrayObras;
	}

	public function insertarActor($NIF, $nombre, $apellidos,$img,$principal) {
		/*
		$message = 		$actor->getImg();
		echo "<script type='text/javascript'>alert('$message');</script>";
		$message = 		$actor->getPrincipal();
		echo "<script type='text/javascript'>alert('$message');</script>";
		*/

		$actor = new Actor($NIF,$nombre,$apellidos,$img,$principal);
		$actordb = new ActorDb();
		$actordb->inserir($actor);
	
	}

	public function insertarDirector($NIF, $nombre, $apellidos) {
		$director = new Director($NIF,$nombre,$apellidos);

	}

	public function insertarObra( $nombre, $genero, $fechaI,$fechaF, $actP,$actS,$director) {
		$obra = new Obra( $nombre, $genero, $fechaI,$fechaF, $actP,$actS,$director);
		$obradb = new Obradb();
		$obradb->inserir($obra);

	}
}

?>