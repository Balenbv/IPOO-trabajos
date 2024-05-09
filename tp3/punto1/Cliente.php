<?php
class Cliente extends Persona{
    private $numeroCliente;
        
    public function __construct($dni, $nombre, $apellido, $numeroCliente) {
        parent::__construct($dni, $nombre, $apellido);
        $this->numeroCliente = $numeroCliente;
    }

    // Getters and Setters
    public function getNumeroCliente() {
        return $this->numeroCliente;
    }

    public function setNumeroCliente($numeroCliente) {
        $this->numeroCliente = $numeroCliente;
    }

    // toString method
    public function __toString() {
        $texto = parent::__toString();
        return$texto . "\nNumero de Cliente: {$this->getNumeroCliente()}";
    }
}