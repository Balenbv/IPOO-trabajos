<?php
/*
para las proyecciones de Cine hay que agregar el género y el país de origen 
de la película.
 */
class Cine extends Actividades
{
    private $genero;
    private $paisOrigen;

    public function __construct($nombre, $horaInicio, $duracion, $precio, $genero, $paisOrigen)
    {
        parent::__construct($nombre, $horaInicio, $duracion, $precio);
        $this->genero = $genero;
        $this->paisOrigen = $paisOrigen;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function getPaisOrigen()
    {
        return $this->paisOrigen;
    }

    public function setGenero($genero)
    {
        $this->genero = $genero;
    }

    public function setPaisOrigen($paisOrigen)
    {
        $this->paisOrigen = $paisOrigen;
    }

    public function __toString()
    {
        return "Cine: ". parent::__toString() . " Género: {$this->getGenero()} \n País de origen: {$this->getPaisOrigen()}";
    }
}
