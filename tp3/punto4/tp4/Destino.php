<?php

class Destino {
    private $identificacion;
    private $nombre;
    private $precioPorDia;

    public function __construct($identificacion, $nombre, $precioPorDia) {
        $this->identificacion = $identificacion;
        $this->nombre = $nombre;
        $this->precioPorDia = $precioPorDia;
    }

    public function getIdentificacion() {
        return $this->identificacion;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPrecioPorDia() {
        return $this->precioPorDia;
    }

    public function setIdentificacion($identificacion) {
        $this->identificacion = $identificacion;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setPrecioPorDia($precioPorDia) {
        $this->precioPorDia = $precioPorDia;
    }

    public function __toString()
    {
        return "Identificacion: {$this->getIdentificacion()}\nNombre: {$this->getNombre()}\nPrecio por dia: {$this->getPrecioPorDia()}\n";
    }

}

