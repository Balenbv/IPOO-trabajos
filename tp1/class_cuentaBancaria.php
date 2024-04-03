<?php
include "tp2\class_persona.php";
class cuentaBancaria
{
    private $numeroCuentaInt;
    private $objPersonaInt;
    private $saldoActualInt;
    private $interesAnualInt;

    public function __construct($numeroCuentaExt, $objPersonaExt, $saldoActualExt, $interesAnualExt)
    {
        $this->numeroCuentaInt = $numeroCuentaExt;
        $this->objPersonaInt = $objPersonaExt;
        $this->saldoActualInt = $saldoActualExt;
        $this->interesAnualInt = $interesAnualExt;
    }

    public function getNumeroCuenta()
    {
        return $this->numeroCuentaInt;
    }

    public function getDniCliente()
    {
        return $this->objPersonaInt;
    }

    public function getSaldoActual()
    {
        return $this->saldoActualInt;
    }

    public function getInteresAnual()
    {
        return $this->interesAnualInt;
    }

    public function actualizarSaldo()
    {
        $this->saldoActualInt += $this->getInteresAnual() / 365;
    }

    public function depositar($cantidad)
    {
        $this->saldoActualInt += $cantidad;
    }

    public function retirar($cantidad)
    {
        if ($cantidad <= $this->saldoActualInt) {
            $this->saldoActualInt -= $cantidad;
        } 
    }

    public function __toString()
    {
        // $this->actualizarSaldo();
        return "asdad".$this->getDniCliente();
    }
}

$objPersona = new Persona("valentin", "rios", "dni", "981237");

$obj2 = new cuentaBancaria(1312, $objPersona, 400, 365);


