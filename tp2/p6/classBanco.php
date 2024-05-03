<?php 

class Banco{

   private $objMostradoresInt;
   private $objClienteInt;

    public function __construct($objMostradoresExt, $objClienteExt)
    {
        $this->objMostradoresInt = $objMostradoresExt;
        $this->objClienteInt = $objClienteExt;
    }

    public function getMostradores()
    {
        return $this->objClienteInt;
    }

    public function getClientes()
    {
        return $this->objClienteInt;
    }

    public function setMostradores($newMostradores)
    {
        $this->objMostradoresInt = $newMostradores;
    }

    public function setClientes($newClientes)
    {
        $this->objClienteInt = $newClientes;
    }

    public function mostradoresQueAtienden($unTramite)
    {
        $coleccionTramistesNecesarios = [];
        foreach($this->getMostradores() as $mostrador)
        {
            if ($mostrador->getTramite() == $unTramite)
            {
               array_push($coleccionTramistesNecesarios, $mostrador);
            }
        }
        return print_r($coleccionTramistesNecesarios);
    }

    public function mejorMostradorPara($unTramite)
    {
        $i=0;
        $mostradorOptimo = null;
        foreach($this->getMostradores() as $mostrador)
        {
            if ($mostrador->getTramite() == $unTramite)
            {
                if($i == 0)
                {
                    $mostradorOptimo = $mostrador;
                }
                if (($mostrador->getPersonasFila() < $mostrador->getCapacidad() && $mostrador->getPersonasFila() < $mostradorOptimo))
                {
                    $mostradorOptimo = $mostrador;
                }
                $i++;
            }
        }

        return $mostradorOptimo;
    }

    public function atender($unCliente){
        if ($this->mejorMostradorPara($unCliente) != null)
        {
            $texto = "\nUsted fue colocado en la fila mas optima para realizar su tramite";
        } else 
        {
            $texto = 'será antendido en cuanto haya lugar en un mostrador';
        }
        return $texto;
    }

}