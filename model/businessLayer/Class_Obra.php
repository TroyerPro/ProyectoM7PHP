<?php
class Obra {
	private $IDobra;
	private $nombre;
	private $genero;
	private $actoresP;
	private $actoresS;
	private $fechaI;
	private $fechaF;
	private $director;

	public function __construct($nombre, $genero, $fechaI,$fechaF, $actP,$actS,$director) {
		$this->setNombre($nombre);
		$this->setGenero($genero);
		$this->setFechaI($fechaI);
		$this->setFechaF($fechaF);
		$this->setActoresP($actP);
		$this->setActoresS($actS);
		$this->setDirector($director);
	}



	public function getIDobra(){
		return $this->IDobra;
	}

	public function setIDobra($IDobra){
		$this->IDobra = $IDobra;
	}

	public function getGenero(){
		return $this->genero;
	}

	public function setGenero($genero){
		$this->genero = $genero;
	}


	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getDescripcion(){
		return $this->descripcion;
	}

	public function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}

	public function getTipo(){
		return $this->tipo;
	}

	public function setTipo($tipo){
		$this->tipo = $tipo;
	}

	public function getFechaI(){
		return $this->fechaI;
	}

	public function setFechaI($fechaI){
		$this->fechaI = $fechaI;
	}

	public function getFechaF(){
		return $this->fechaF;
	}

	public function setFechaF($fechaF){
		$this->fechaF = $fechaF;
	}


    /**
     * Gets the value of actoresP.
     *
     * @return mixed
     */
    public function getActoresP()
    {
        return $this->actoresP;
    }

    /**
     * Sets the value of actoresP.
     *
     * @param mixed $actoresP the actores
     *
     * @return self
     */
    private function setActoresP($actoresP)
    {
        $this->actoresP = $actoresP;

        return $this;
    }

    /**
     * Gets the value of actoresS.
     *
     * @return mixed
     */
    public function getActoresS()
    {
        return $this->actoresS;
    }

    /**
     * Sets the value of actoresS.
     *
     * @param mixed $actoresS the actores
     *
     * @return self
     */
    private function setActoresS($actoresS)
    {
        $this->actoresS = $actoresS;

        return $this;
    }

    /**
     * Gets the value of director.
     *
     * @return mixed
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Sets the value of director.
     *
     * @param mixed $director the director
     *
     * @return self
     */
    private function setDirector($director)
    {
        $this->director = $director;

        return $this;
    }
}
?>