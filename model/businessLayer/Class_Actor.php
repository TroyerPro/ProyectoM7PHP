<?php
include "Class_Persona.php";
class Actor extends Persona{
	
	private $img;
	private $principal;
	
	public function __construct($NIF, $nombre, $apellidos,$img,$principal) {
		parent::__construct($NIF, $nombre, $apellidos);
		$this->setImg($img);
		$this->setPrincipal($principal);
	}

	


    /**
     * Gets the value of img.
     *
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Sets the value of img.
     *
     * @param mixed $img the img
     *
     * @return self
     */
    private function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Gets the value of principal.
     *
     * @return mixed
     */
    public function getPrincipal()
    {

        return $this->principal;
    }

    /**
     * Sets the value of principal.
     *
     * @param mixed $principal the principal
     *
     * @return self
     */
    private function setPrincipal($principal)
    {
        $this->principal = $principal;

        return $this;
    }
}

?>