<?php

require_once("Class_Db.php");
require_once("bdcfg.php");

class ObraDb {

	public function inserir($obra) {		
		$query="insert into obra values('','".$obra->getNombre()."', '".$obra->getGenero()."', '".$obra->getFechaI()."', '".$obra->getFechaF()."', '".$obra->getActoresP()."','".$obra->getActoresS()."','".$obra->getDirector()."');";				
		$con = new Db();
		$con->consulta($query, $GLOBALS['bd']);
		$con->close();
	} 

	


}    
 ?>