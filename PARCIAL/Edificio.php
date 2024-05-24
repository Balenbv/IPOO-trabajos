<?php

class edificio
{
    private $direccion;
    private $objAdministrador;
    private $colObjInmuebles;

    public function __construct($direccion, $objAdministrador, $colObjInmuebles)
    {
        $this->direccion = $direccion;
        $this->objAdministrador = $objAdministrador;
        $this->colObjInmuebles = $colObjInmuebles;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($value)
    {
        $this->direccion = $value;
    }

    public function getObjAdministrador()
    {
        return $this->objAdministrador;
    }

    public function setObjAdministrador($value)
    {
        $this->objAdministrador = $value;
    }

    public function getColObjInmuebles()
    {
        return $this->colObjInmuebles;
    }

    public function setColObjInmuebles($value)
    {
        $this->colObjInmuebles = $value;
    }

    public function mostrarInmuebles()
    {
        $texto = "";
        foreach ($this->colObjInmuebles as $inmueble) {
            $texto .= "\n" . $inmueble;
        }
        return $texto;
    }

    public function darInmueblesDisponibles($tipo, $costo)
    {
        $colInmueblesDisponibles = [];
        foreach ($this->colObjInmuebles as $inmueble) {
            if ($inmueble->estaDispobible($tipo, $costo)) {
                $colInmueblesDisponibles[] = $inmueble;
            }
        }
        return $colInmueblesDisponibles;
    }

    public function buscarInmuebles($objInmueble)
    {
        $seEncontro = false;
        $posicion = -1;
        $i = 0;
        do {
            if ($this->getColObjInmuebles()[$i] == $objInmueble) {
                $seEncontro = true;
                $posicion = $i;
            }
        } while (!$seEncontro && $i < count($this->getColObjInmuebles()));

        return $posicion;
    }

    public function registrarAlquilerInmueble($tipoUso, $costoMaximo, $objPersona){
        $colInmueblesDisponibles = $this->darInmueblesDisponibles($tipoUso, $costoMaximo);
        $i=0;
        $muebleMasBajo = $colInmueblesDisponibles[0];
        foreach($colInmueblesDisponibles as $inmueble){
            if($inmueble->getPiso() < $muebleMasBajo->getPiso()){
                $muebleMasBajo = $inmueble;
            }
        }

        return $muebleMasBajo->alquilar($objPersona);
    }

    public function calculaCostoEdificio(){
        $costo = 0;
        foreach($this->colObjInmuebles as $inmueble){
            if ($inmueble->getInquilino() != null){
            $costo += $inmueble->getCosto();
            }
        }
        return $costo;
    }

    public function __toString()
    {
        return "\nLa direccion es: {$this->getDireccion()} \nEl administrador es: {$this->getObjAdministrador()} \nLos inmuebles son: {$this->mostrarInmuebles()}";
    }
}
