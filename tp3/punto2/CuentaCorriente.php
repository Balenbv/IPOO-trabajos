<?php

class CuentaCorriente extends Cuenta{
    private $montoDescubierto;

    public function __construct($montoDescubierto, $objCliente, $saldo) {
        parent::__construct($objCliente, $saldo);
        $this->montoDescubierto = $montoDescubierto;
    }

    public function getMontoDescubierto() {
        return $this->montoDescubierto;
    }

    public function setMontoDescubierto($montoDescubierto) {
        $this->montoDescubierto = $montoDescubierto;
    }

    public function __toString() {
        return "Cuenta Corriente: \n" . parent::__toString() . "\nMonto descubierto: {$this->getMontoDescubierto()}\n";
    }
}