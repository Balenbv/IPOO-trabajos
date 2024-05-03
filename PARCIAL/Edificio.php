<?php

class edificio
{
    private $direccion;
    private $coleccionInmuebles;
    private $objPersonaAdministrador;

    public function __construct($direccion, $objPersonaAdministrador, $coleccionInmuebles)
    {

        $this->direccion = $direccion;
        $this->objPersonaAdministrador = $objPersonaAdministrador;
        $this->coleccionInmuebles = $coleccionInmuebles;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($value)
    {
        $this->direccion = $value;
    }

    public function getColeccionInmuebles()
    {
        return $this->coleccionInmuebles;
    }

    public function setColeccionInmuebles($value)
    {
        $this->coleccionInmuebles = $value;
    }

    public function getObjPersonaAdministrador()
    {
        return $this->objPersonaAdministrador;
    }

    public function setObjPersonaAdministrador($value)
    {
        $this->objPersonaAdministrador = $value;
    }

    public function textoColeccionInmuebles()
    {
        $i=0;
        $texto = "";
        foreach ($this->getColeccionInmuebles() as $inmueble) {
            $texto .= "\ninmueble nro:" .$i+1 ."\n". $inmueble;
            $i++;
        }

        return $texto;
    }

    public function darInmueblesDisponibles($tipoUso, $costoMaximo)
    {
        $colInmueblesDisponibles = [];

        foreach ($this->getColeccionInmuebles() as $inmueble) {
            if ($inmueble->estaDisponible($tipoUso, $costoMaximo)) {
                $colInmueblesDisponibles[] = $inmueble;
            }
        }
        return $colInmueblesDisponibles;
    }

    public function buscarInmueble($objInmueble)
    {
        $indice = -1;
        $codigo = $objInmueble->getCodigo();
        $i = 0;
        do {
            if ($codigo == $this->getColeccionInmuebles()[$i]->getCodigo()) {
                $indice = $i;
            } else {
                $i++;
            }
        } while ($i < count($this->getColeccionInmuebles()) && $indice == -1);

        return $indice;
    }
    
    public function calculaCostoEdificio(){
        $costo = 0;
        foreach ($this->getColeccionInmuebles() as $inmueble){
            if ($inmueble->getObjInquilino() != null){
                $costo += $inmueble->getCostoMensual();
            }
        }
        return $costo;
    }

    public function registrarAlquilerInmueble($tipoUso, $costoMaximo, $objPersona)
    {
        $seRegistro = false;
        $inmueblePisoMasChico = null;
        foreach ($this->getColeccionInmuebles() as $inmueble) {
            if ($inmueblePisoMasChico == null && $inmueble->estaDisponible($tipoUso, $costoMaximo)) {
                $inmueblePisoMasChico = $inmueble;
                $seRegistro = true;
            }

            if ($inmueblePisoMasChico > $inmueble->getNumeroPiso() && $inmueble->estaDisponible($tipoUso, $costoMaximo)) {
                $inmueblePisoMasChico = $inmueble;
            }
        }
        if ($inmueblePisoMasChico != null) {
            $inmueblePisoMasChico->setObjInquilino($objPersona);
            $coleccionInmuebles = $this->getColeccionInmuebles();
            $coleccionInmuebles[] = $inmueblePisoMasChico;
            $this->setColeccionInmuebles($coleccionInmuebles);
        }

        return $seRegistro;
    }







    public function __toString()
    {
        return " datos edificios:
direccion: {$this->getDireccion()}
coleccion Inmuebles del edificio: {$this->textoColeccionInmuebles()}
Administrado del edificio:
{$this->getObjPersonaAdministrador()}
";
    }
}
