<?php

class CajaDeAhorro extends Cuenta{

    public function __construct($objCliente, $saldo){
        parent::__construct($objCliente, $saldo);
    }

    public function __toString()
    {
        return "Caja de Ahorro: \nlakjshd\n" . parent::__toString() ."\n";
    }
}