<?php

require_once("Class_Db.php");
require_once("bdcfg.php");

class Agenciadb {

	public function getActores() {		
		$query="SELECT * FROM actor";				
		$con = new Db();
		$result = $con->consulta($query, $GLOBALS['bd']);
		$con->close();
		return $result;
	} 

		public function getObras() {		
		$query="SELECT * FROM obra";				
		$con = new Db();
		$result = $con->consultarObras($query, $GLOBALS['bd']);
		$con->close();

		return $result;

	} 

		public function getDirectores() {		
		$query="SELECT * FROM director";				
		$con = new Db();
		$result = $con->consulta($query, $GLOBALS['bd']);
		$con->close();

		return $result;
	} 


}    
 ?>