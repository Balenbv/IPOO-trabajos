<?php

class Mostrador{
    private $tramiteInt;
    private $personasFila;
    private $capacidadFila;

        public function __construct($tramiteExt, $personasFila, $capacidadFila)
        {
            $this->tramiteInt = $tramiteExt;
            $this->personasFila = $tramiteExt;
            $this->capacidadFila = $capacidadFila;
        }

        public function getTramite(){
            return $this->tramiteInt;
        }

        public function getPersonasFila(){
            return $this->personasFila;
        }

        public function getCapacidad(){
            return $this->capacidadFila;
        }

        public function setTramite($newTramite){
            $this->tramiteInt = $newTramite;
        }

        public function setPersonasFilas($newPersonasFilas){
            $this->personasFila = $newPersonasFilas;
        }

        public function setCapacidad($newCapacidad){
            $this->capacidadFila = $newCapacidad;
        }

        public function atiende($unTramite){
            return $this->getTramite() == $unTramite;
        }


}