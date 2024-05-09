<?php

class Venta {
    private $fecha;
    private $objPaqueteTuristico;
    private $cantidadPersonas;
    private $objCliente;

    public function __construct($fecha, $objPaqueteTuristico, $cantidadPersonas, $objCliente) {
        $this->fecha = $fecha;
        $this->objPaqueteTuristico = $objPaqueteTuristico;
        $this->cantidadPersonas = $cantidadPersonas;
        $this->objCliente = $objCliente;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getObjPaqueteTuristico() {
        return $this->objPaqueteTuristico;
    }

    public function getCantidadPersonas() {
        return $this->cantidadPersonas;
    }

    public function getObjCliente() {
        return $this->objCliente;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function setObjPaqueteTuristico($objPaqueteTuristico) {
        $this->objPaqueteTuristico = $objPaqueteTuristico;
    }

    public function setCantidadPersonas($cantidadPersonas) {
        $this->cantidadPersonas = $cantidadPersonas;
    }

    public function setObjCliente($objCliente) {
        $this->objCliente = $objCliente;
    }

    public function ImporteFinal(){
        return $this->objPaqueteTuristico->getDestino()->getPrecioPorDia() * $this->objPaqueteTuristico->getCantidadDias() * $this->cantidadPersonas;
    }

    public function __toString()
    {
        return "Fecha: {$this->getFecha()}\nPaquete Turistico: {$this->getObjPaqueteTuristico()}\nCantidad de personas: {$this->getCantidadPersonas()}\nCliente: {$this->getObjCliente()}\n";
    }
}