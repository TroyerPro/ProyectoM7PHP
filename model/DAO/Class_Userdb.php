<?php

require_once("Class_Db.php");
require_once("bdcfg.php");

class Userdb {

	public function getPassword($username) {		
		$query="SELECT password FROM users WHERE username='".$username."'";				
		$con = new Db();
		$result = $con->consulta($query, $GLOBALS['bd']);
		$con->close();
		return $result;

	} 


}    
 ?>