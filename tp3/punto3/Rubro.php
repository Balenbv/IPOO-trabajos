<?php

class Rubro{
    private $descripcion;
    private $porcentajeGanancia;

    public function __construct($descripcion, $porcentajeGanancia){
        $this->descripcion = $descripcion;
        $this->porcentajeGanancia = $porcentajeGanancia;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    public function getPorcentajeGanancia(){
        return $this->porcentajeGanancia;
    }

    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    public function setPorcentajeGanancia($porcentajeGanancia){
        $this->porcentajeGanancia = $porcentajeGanancia;
    }

    public function __toString()
    {
        return "Rubro: {$this->getDescripcion()}\nPorcentaje de ganancia: {$this->getPorcentajeGanancia()}%\n";
    }

}
