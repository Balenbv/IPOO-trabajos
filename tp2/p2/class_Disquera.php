<?php
class Disquera
{
    private $hora_desdeInt;
    private $hora_hastaInt;
    private $estadoInt;
    private $direccionInt;
    private $duenioInt;

    public function __construct($hora_desdeExt, $hora_hastaExt, $estadoExt, $direccionExt, $duenioExt)
    {
        $this->hora_desdeInt = $hora_desdeExt;
        $this->hora_hastaInt = $hora_hastaExt;
        $this->estadoInt = $estadoExt;
        $this->direccionInt = $direccionExt;
        $this->duenioInt = $duenioExt;
    }

    public function getHora_Desde()
    {
        return $this->hora_desdeInt[0];
    }

    public function getMin_Desde()
    {
        return $this->hora_desdeInt[1];
    }

    public function getHora_Hasta()
    {
        return $this->hora_hastaInt[0];
    }

    public function getMin_Hasta()
    {
        return $this->hora_hastaInt[1];
    }

    public function getEstado()
    {
        return $this->estadoInt;
    }

    public function getDireccion()
    {
        return $this->direccionInt;
    }

    public function getDuenio()
    {
        return $this->duenioInt;
    }

    public function setEstado($newEstado)
    {
        $this->estadoInt = $newEstado;
    }

    public function dentroHorarioAtencion($hora, $minutos)
    {
        $boolean = false;
                    //20:30
                    //20:00
        if (($hora >= $this->getHora_Desde() && $hora < $this->getHora_Hasta()) || ($hora == $this->getHora_Hasta() && $minutos <= $this->getMin_Hasta())) {
            $boolean = true;
            // $this->setEstado("abierto");
        }
        return $boolean;
    }

    public function abrirDisquera($hora, $minutos)
    {
        if ($this->dentroHorarioAtencion($hora, $minutos)) {
            $this->setEstado("abierto");
        }
    }

    public function cerrarDisquera($hora, $minutos)
    {
        if (!$this->dentroHorarioAtencion($hora, $minutos)) {
            $this->setEstado("cerrado");
        }
    }

    public function __toString()
    {
        return "
abre a las: {$this->getHora_Desde()}hs
cierra a las: {$this->getHora_Hasta()}hs 
el negocio esta: {$this->getEstado()}
la direccion es: {$this->getDireccion()}
******************
los datos del duenio son:\n {$this->getDuenio()}
";
    }
}
