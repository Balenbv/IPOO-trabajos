<?php 

class Cuenta{
    private $objCliente;
    private $saldo;

    public function __construct($objCliente, $saldo){
        $this->objCliente = $objCliente;
        $this->saldo = $saldo;
    }

    public function getObjCliente(){
        return $this->objCliente;
    }

    public function setObjCliente($objCliente){
        $this->objCliente = $objCliente;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }

    public function realizarDeposito($monto){
        $this->setSaldo($this->getSaldo() + $monto);
    }

    public function realizarRetiro($monto){
        if($this->getSaldo() >= $monto){
            $this->setSaldo($this->getSaldo() - $monto);
        }
    }

    public function __toString(){
        return "{$this->getObjCliente()} \nSaldo: {$this->getSaldo()} "; 
    }

}