<?php

class PaqueteTuristico {
    private $fechaDesde;
    private $cantidadDias;
    private $objDestino;
    private $cantidadTotalPlazas;
    private $plazasDisponibles;

    public function __construct($fechaDesde, $cantidadDias, $objDestino, $cantidadTotalPlazas) {
        $this->fechaDesde = $fechaDesde;
        $this->cantidadDias = $cantidadDias;
        $this->objDestino = $objDestino;
        $this->cantidadTotalPlazas = $cantidadTotalPlazas;
        $this->plazasDisponibles = $cantidadTotalPlazas;
    }

    public function getFechaDesde() {
        return $this->fechaDesde;
    }
    public function getCantidadDias() {
        return $this->cantidadDias;
    }

    public function getObjDestino() {
        return $this->objDestino;
    }

    public function getCantidadTotalPlazas() {
        return $this->cantidadTotalPlazas;
    }

    public function getPlazasDisponibles() {
        return $this->plazasDisponibles;
    }

    public function setFechaDesde($fechaDesde) {
        $this->fechaDesde = $fechaDesde;
    }

    public function setCantidadDias($cantidadDias) {
        $this->cantidadDias = $cantidadDias;
    }

    public function setObjDestino($objDestino) {
        $this->objDestino = $objDestino;
    }

    public function setCantidadTotalPlazas($cantidadTotalPlazas) {
        $this->cantidadTotalPlazas = $cantidadTotalPlazas;
    }

    public function setPlazasDisponibles($plazasDisponibles) {
        $this->plazasDisponibles = $plazasDisponibles;
    }

    public function __toString()
    {
        return "Fecha desde: {$this->getFechaDesde()}\nCantidad de dias: {$this->getCantidadDias()}\nobjDestino: {$this->getobjDestino()}\nCantidad total de plazas: {$this->getCantidadTotalPlazas()}\nPlazas disponibles: {$this->getPlazasDisponibles()}\n";
    }
}