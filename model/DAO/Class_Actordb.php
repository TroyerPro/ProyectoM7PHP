<?php

require_once("Class_Db.php");
require_once("bdcfg.php");

class ActorDb {

	public function inserir($actor) {		
		$query="insert into actor values('".$actor->getNIF()."', '".$actor->getNombre()."', '".$actor->getApellidos()."', '".$actor->getImg()."', '".$actor->getPrincipal()."');";				
		$con = new Db();
		$con->consulta($query, $GLOBALS['bd']);
		$con->close();
	} 
}    
 ?>