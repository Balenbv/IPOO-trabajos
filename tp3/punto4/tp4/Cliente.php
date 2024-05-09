<?php

class Cliente{
    private $tipoDocumento;
    private $numeroDocumento;
    public function __construct($tipoDocumento, $numeroDocumento){
        $this->tipoDocumento = $tipoDocumento;
        $this->numeroDocumento = $numeroDocumento;
    }

    public function getTipoDocumento(){
        return $this->tipoDocumento;
    }

    public function getNumeroDocumento(){
        return $this->numeroDocumento;
    }

    public function setTipoDocumento($tipoDocumento){
        $this->tipoDocumento = $tipoDocumento;
    }

    public function setNumeroDocumento($numeroDocumento){
        $this->numeroDocumento = $numeroDocumento;
    }

    public function __toString(){
        return "Tipo de documento: {$this->getTipoDocumento()}\nNumero de documento: {$this->getNumeroDocumento()}\n";
    }
}