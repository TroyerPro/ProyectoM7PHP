<?php
include  "../model/DAO/Class_Userdb.php";
class Usuario {

	private $username;
	private $password;

	public function __construct($username, $password) {
		$this->username=$username;
		$this->password=md5($password);
	}

	public function setUsername($username){
		return $this->username = $username;
	}

	public function setPassword($password){
		return $this->password = md5($password);
	}

	public function validarUser() {
		$userdb = new Userdb();
		$passwordDB = $userdb->getPassword($this->username);

		$row = mysql_fetch_array($passwordDB);

		if($this->password == $row['password']) {
			return true;
		} else {
			return false;
		}


	}

    /**
     * Gets the value of username.
     *
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Gets the value of password.
     *
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }
}
?>