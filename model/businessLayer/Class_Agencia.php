<?php
require_once  "Class_Obra.php";
require_once  "Class_Actor.php";
require_once  "Class_Director.php";
include  "../model/DAO/Class_Obradb.php";
include  "../model/DAO/Class_Agenciadb.php";
include  "../model/DAO/Class_Actordb.php";
include  "../model/DAO/Class_Directordb.php";

class Agencia{

	private $nombre;
	private $direccion;
	private $telefono;
	private $obra;
	private $actor;
	private $director;
	private $users;
	private $generos;

	public function __construct($nombre, $direccion,$telefono) {
		$this->nombre=$nombre;
		$this->direccion=$direccion;
		$this->telefono=$telefono;
		$this->obra = array();
		$this->actor = array();
		$this->director = array();
		$this->users = array();
		$this->generos = ["Miedo","Aventura","Comedia","Suspense"];
	}
	
	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getGeneros(){
		return $this->generos;
	}

	public function setGeneros($generos){
		$this->generos = $generos;
	}


	public function getUsers(){
		return $this->users;
	}

	public function setUsers($users){
		$this->users = $users;
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

	public function getObra($idObra){
		foreach ($this->obra as $item) {
			if($item->getIDobra() == $idObra) {
				return  $item;
			}
		}

		return false;

	}

	public function getObras(){
		return $this->obra;
	}

	public function getActor($nif){
		foreach ($this->actor as $item) {
			if($item->getNIF() == $nif) {
				return  $item;
			}
		}
		return false;
		//return $this->actor;
	}

	public function getDirector($nif){
		foreach ($this->director as $item) {
			if($item->getNIF() == $nif) {
				return  $item;
			}
		}
		return false;
	}

	public function getActors(){
		return $this->actor;
	}

	public function setObras($obra){
		return $this->obra = $obra;
	}

	public function setPersona($actor){
		return $this->actor=$actor;
	}

	public function getDirectores(){
		return $this->director;
	}

	public function setDirector($director){
		return $this->director = $director;
	}

	public function populateAgencia() {
		
			$agencia = unserialize($_SESSION['agencia']);
			$totes=$agencia->getArrayObras();
			$totes2=$agencia->getArrayActores();
			$totes3=$agencia->getArrayDirectores();
			$agencia->setObras($totes);
			$agencia->setPersona($totes2);
			$agencia->setDirector($totes3);
			$_SESSION['agencia']=serialize($agencia);

	}


	public function getArrayActores() {
		$agenciaDb = new Agenciadb();
		$arrayActores = $agenciaDb->getActores();
		return $arrayActores;
	}

	public function getArrayObras() {
		$agenciaDb = new Agenciadb();
		$arrayObras = $agenciaDb->getObras();
		return $arrayObras;
	}

	//Adry
	public function getArrayDirectores() {
		$agenciaDb = new Agenciadb();
		$arrayDirectores = $agenciaDb->getDirectores();
		return $arrayDirectores;
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
		$directordb=new DirectorDb();
		$directordb->inserir($director);

	}

	public function insertarObra( $nombre, $genero, $fechaI,$fechaF, $actP,$actS,$director) {
		$obra = new Obra($nombre, $genero, $fechaI,$fechaF, $actP,$actS,$director);
		$obradb = new Obradb();
		$obradb->inserir($obra);
		array_push($this->obra, $obra);
	}
}

?>