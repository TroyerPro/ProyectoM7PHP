<?php
require_once("bdcfg.php");
require_once("Interface_db.php");
require_once ("../model/businessLayer/Class_Obra.php");
class Db implements interface_db{

	private $server;
	private $username;
	private $password;
	private $dbname;
	private $link;
	
	
	public function __construct(){
		$this->setServer($GLOBALS['server']);
		$this->setUsername($GLOBALS['USER']);
		$this->setPassword($GLOBALS['PASS']);		
	}
		
	public function getServer(){
		return $this->server;
	}

	public function setServer($value){
		$this->server = $value;
	}
	
	public function getUsername(){
		return $this->username;
	}

	public function setUsername($value){
		$this->username = $value;
	}
	
	public function getPassword(){
		return $this->password;
	}

	public function setPassword($value){
		$this->password = $value;
	}
	
	public function getDbname(){
		return $this->dbname;
	}

	public function setDbname($value){
		$this->dbname = $value;
	}
	
	public function connect()	{
	
		$this->link=mysql_connect($this->getServer(),$this->getUsername(),$this->getPassword());			
		if (!$this->link) {
			die('Error, could not connect: ' . mysql_error());
		}				
		return $this->link;
	}
	
	public function bd($database){
		$this->dbname = mysql_select_db($database, $this->link);
		if (!$this->dbname) {
			die ('Error, can\'t use database: ' . mysql_error());
		}
	}
	
	public function close()	{
		return mysql_close($this->link);
	}

	public function error()	{
		return mysql_error($this->link);
	}

	public function consulta($query, $pBD){		
		$con= $this->connect();
		$this->bd($pBD);
		$hola = mysql_query($query, $con) or die('Error, query failed: '.$this->error());
		return $hola;
	}

	public function consultarObras($query, $pBD){		
		$con= $this->connect();
		$this->bd($pBD);
		$consulta = mysql_query($query, $con) or die('Error, query failed: '.$this->error());
		$cont = 0;
		while ($row=mysql_fetch_array($consulta)) {
			$arrayLlibres[$cont] = new Obra ($row["nombre"],$row["genero"],$row["fecha_incio"],$row["fecha_final"],$row["actores_principales"],$row["actores_secundarios"],$row["director"]);
			$arrayLlibres[$cont]->setIDObra($row["id_obra"]);
			$cont++;			
		}
		//print_r($arrayLlibres);
		return $arrayLlibres;
	}	
}
    
?>
