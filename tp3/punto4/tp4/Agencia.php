<?php

class Agencia
{
    private $destinos;
    private $paquetesTuristicos;
    private $coleccionObjVentas;
    private $coleccionObjVentasOnLine;

    public function __construct($destinos, $paquetesTuristicos, $coleccionObjVentas, $coleccionObjVentasOnLine)
    {
        $this->destinos = $destinos;
        $this->paquetesTuristicos = $paquetesTuristicos;
        $this->coleccionObjVentas = $coleccionObjVentas;
        $this->coleccionObjVentasOnLine = $coleccionObjVentasOnLine;
    }

    public function getDestinos()
    {
        return $this->destinos;
    }

    public function getPaquetesTuristicos()
    {
        return $this->paquetesTuristicos;
    }

    public function getColeccionObjVentas()
    {
        return $this->coleccionObjVentas;
    }

    public function getColeccionObjVentasOnLine()
    {
        return $this->coleccionObjVentasOnLine;
    }

    public function setDestinos($destinos)
    {
        $this->destinos = $destinos;
    }

    public function setPaquetesTuristicos($paquetesTuristicos)
    {
        $this->paquetesTuristicos = $paquetesTuristicos;
    }

    public function setColeccionObjVentas($coleccionObjVentas)
    {
        $this->coleccionObjVentas = $coleccionObjVentas;
    }

    public function setColeccionObjVentasOnLine($coleccionObjVentasOnLine)
    {
        $this->coleccionObjVentasOnLine = $coleccionObjVentasOnLine;
    }

    public function existePaquete($objPaquete)
    {
        $i = 0;
        $existe = false;
        do {
            if ($this->getPaquetesTuristicos()[$i]->getFechaDesde() == $objPaquete->getFechaDesde()) {
                $existe = true;
            } else {
                $i++;
            }
        } while ($i < count($this->getPaquetesTuristicos()) && !$existe);

        return $existe;
    }

    public function incorporarPaquete($objPaquete)
    {
        if (!$this->existePaquete($objPaquete)) {
            $coleccionAux = $this->getPaquetesTuristicos();
            $coleccionAux[] = $objPaquete;
            $this->setPaquetesTuristicos($coleccionAux);
        }

        return !$this->existePaquete($objPaquete);
    }

    //     incorporarVenta(objPaquete,tipoDoc,numDoc,cantPer, esOnLine): método que recibe por parámetro
    // el paquete, tipo documento, número de documento, la cantidad de personas que van a realizar el 
    // paquete turístico y si se trata o no de una venta on-line (valor true o false). El método retorna el 
    // importe final que debe ser abanado en caso que la venta pudo concretarse con éxito y -1 en caso 
    // contrario.

    public function incorporarVenta($objPaquete, $tipoDoc, $numDoc, $cantPersonas, $esOnline)
    {
        $importeFinal = -1;
        if ($this->existePaquete($objPaquete)) {
            if ($cantPersonas < $objPaquete->getCantidadTotalPlazas()) {
                $cliente = new Cliente($tipoDoc, $numDoc);
                if ($esOnline) {
                    $venta = new OnLine(date('y - m - d'), $objPaquete, $cantPersonas, $cliente, 20);
                    $importeFinal = $venta->ImporteFinal();
                    $ventasTotates = $this->getColeccionObjVentas();
                    $ventasTotates[] = $venta;
                    $this->setColeccionObjVentas($ventasTotates);
                } else {
                    $venta = new Venta(date('y - m - d'), $objPaquete, $cantPersonas, $cliente);
                    $importeFinal = $venta->ImporteFinal();
                    $ventasTotates = $this->getColeccionObjVentasOnLine();
                    $ventasTotates[] = $venta;
                    $this->setColeccionObjVentasOnLine($ventasTotates);
                }
            }
        }
        return $importeFinal;
    }
}
