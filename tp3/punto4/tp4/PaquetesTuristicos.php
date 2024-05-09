<?php

class PaqueteTuristico {
    private $fechaDesde;
    private $cantidadDias;
    private $destino;
    private $cantidadTotalPlazas;
    private $plazasDisponibles;

    public function __construct($fechaDesde, $cantidadDias, $destino, $cantidadTotalPlazas) {
        $this->fechaDesde = $fechaDesde;
        $this->cantidadDias = $cantidadDias;
        $this->destino = $destino;
        $this->cantidadTotalPlazas = $cantidadTotalPlazas;
        $this->plazasDisponibles = $cantidadTotalPlazas;
    }

    public function getFechaDesde() {
        return $this->fechaDesde;
    }
    public function getCantidadDias() {
        return $this->cantidadDias;
    }

    public function getDestino() {
        return $this->destino;
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

    public function setDestino($destino) {
        $this->destino = $destino;
    }

    public function setCantidadTotalPlazas($cantidadTotalPlazas) {
        $this->cantidadTotalPlazas = $cantidadTotalPlazas;
    }

    public function setPlazasDisponibles($plazasDisponibles) {
        $this->plazasDisponibles = $plazasDisponibles;
    }

    public function __toString()
    {
        return "Fecha desde: {$this->getFechaDesde()}\nCantidad de dias: {$this->getCantidadDias()}\nDestino: {$this->getDestino()}\nCantidad total de plazas: {$this->getCantidadTotalPlazas()}\nPlazas disponibles: {$this->getPlazasDisponibles()}\n";
    }
}