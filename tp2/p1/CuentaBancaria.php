<?php

/*
-clase CuentaBancaria
-atributos: número de cuenta, el DNI del cliente, el saldo actual y el interés anual que se aplica a la cuenta. 
-Define en la clase los siguientes métodos:
-Método constructor _ _construct() que recibe como parámetros los valores iniciales para los
atributos de la clase.
-Los método de acceso de cada uno de los atributos de la clase.

-actualizarSaldo(): actualizará el saldo de la cuenta aplicándole el interés diario (interés anual dividido entre 365 aplicado al saldo actual).
-depositar($cant): permitirá ingresar una cantidad de dinero en la cuenta.
-retirar($cant): permitirá sacar una cantidad de dinero de la cuenta (si hay saldo).
-Redefinir el método _ _toString() para que retorne la información de los atributos de la clase.
-Crear un script Test_CuentaBancaria que cree un objeto CuentaBancaria e invoque a cada uno de los métodos implementados 
*/

class CuentaBancaria{
    private int $numCuenta;
    private $objPersona;
    private int $saldoActual;
    private int $interesAnual;

    public function __construct($numCuentaInput, persona $objPersona,$saldoActualInput,$interesAnualInput){
        $this->numCuenta = $numCuentaInput;
        $this->objPersona = $objPersona;
        $this->saldoActual = $saldoActualInput;
        $this->interesAnual = $interesAnualInput;
    }

       //num de cuenta
    public function getNumCuenta(){
        return $this->numCuenta;
    }
    public function setNumCuenta($numCuentaInput){
        $this->numCuenta = $numCuentaInput;
    }

    public function getPersona(){
        return $this->objPersona;
    }
    public function setPersona($objPersona){
        $this->objPersona = $objPersona;
    }

        //saldo actual
    public function getSaldoActual(){
        return $this->saldoActual;
    }
    public function setSaldoActual($saldoActualInput){
        $this->saldoActual = $saldoActualInput;
    }
        //interes anual
    public function getInteresAnual(){
        return $this->interesAnual;
    }
    public function setInteresActual($interesAnualInput){
        $this->interesAnual = $interesAnualInput;
    }

    public function actualizarSaldo(){
        $saldoActual = $this->getSaldoActual();

        $tasaInteresDecimal = $this->getInteresAnual() /  100;
        $porcentaje = $tasaInteresDecimal /  365;
        $intDiario = $saldoActual * $porcentaje;
        $saldoActual = $saldoActual - $intDiario;
        $this->setSaldoActual(round($saldoActual));
        return $this->getSaldoActual();
    }

    public function depositar($cant){
        $this->setSaldoActual($this->getSaldoActual() + $cant);
        return $this->getSaldoActual();  
    }

    public function retirar($cant){
        $resultado = false; 
        if($this->getSaldoActual() < $cant){
            $resultado = true;
        }
        return $resultado;
    }

    public function __toString(){ 
        $texto =  "el numero de cuenta es de :".$this->getNumCuenta() . "\n";
        $texto .= "El cliente con el D.N.I N°:".$this->getPersona(). "\n";
        $texto .= "el saldo actual es de : ".$this->getsaldoActual() . "\n";
        $texto .= "el interes anual es de :".$this->getInteresAnual() . "\n";
        return $texto;

    }

}

