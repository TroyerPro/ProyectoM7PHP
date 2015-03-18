<?php

require_once("Class_Db.php");
require_once("bdcfg.php");

class DirectorDb {

	public function inserir($director) {		
		$query="insert into director values('".$director->getNIF()."', '".$director->getNombre()."', '".$director->getApellidos()."');";				
		$con = new Db();
		$con->consulta($query, $GLOBALS['bd']);
		$con->close();
	} 
}    
 ?>