 <?php

class PaqueteTuristico {
    private $ObjFecha;
    private $cantidadDias;
    private $objDestino;
    private $cantidadTotalPlazas;
    private $plazasDisponibles;
    

    public function __construct($ObjFecha, $cantidadDias, $objDestino, $cantidadTotalPlazas) {
        $this->ObjFecha = $ObjFecha;
        $this->cantidadDias = $cantidadDias;
        $this->objDestino = $objDestino;
        $this->cantidadTotalPlazas = $cantidadTotalPlazas;
        $this->plazasDisponibles = $cantidadTotalPlazas;
    }

    public function getObjFecha() {
        return $this->ObjFecha;
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

    public function setObjFecha($ObjFecha) {
        $this->ObjFecha = $ObjFecha;
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
        return "Fecha desde: {$this->getObjFecha()}\nCantidad de dias: {$this->getCantidadDias()}\nobjDestino: {$this->getobjDestino()}\nCantidad total de plazas: {$this->getCantidadTotalPlazas()}\nPlazas disponibles: {$this->getPlazasDisponibles()}\n";
    }
}