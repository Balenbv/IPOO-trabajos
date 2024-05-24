<?php

/**
 *  Si en cambio se trata de un Musical hay que agregar el director del mismo y la cantidad de 
 *   personas en escena.
 */
class Musical extends Actividades
{
    private $director;
    private $cantidadPersonas;

    public function __construct($nombre, $horaInicio, $duracion, $precio, $director, $cantidadPersonas)
    {
        parent::__construct($nombre, $horaInicio, $duracion, $precio);
        $this->director = $director;
        $this->cantidadPersonas = $cantidadPersonas;
    }

    public function getDirector()
    {
        return $this->director;
    }

    public function getCantidadPersonas()
    {
        return $this->cantidadPersonas;
    }

    public function setDirector($director)
    {
        $this->director = $director;
    }

    public function setCantidadPersonas($cantidadPersonas)
    {
        $this->cantidadPersonas = $cantidadPersonas;
    }

    public function __toString()
    {
        return "Musical: ". parent::__toString() . " Director: {$this->getDirector()} \n Cantidad de personas: {$this->getCantidadPersonas()}";
    }
}
