<?php

class Venta
{
    private $fecha;
    private $coleccionDeProductos;
    private $objCliente;

    public function __construct($fecha, $coleccionDeProductos, $objCliente)
    {
        $this->fecha = $fecha;
        $this->coleccionDeProductos = $coleccionDeProductos;
        $this->objCliente = $objCliente;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function getColeccionDeProductos()
    {
        return $this->coleccionDeProductos;
    }

    public function getObjCliente()
    {
        return $this->objCliente;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function setColeccionDeProductos($coleccionDeProductos)
    {
        $this->coleccionDeProductos = $coleccionDeProductos;
    }

    public function setObjCliente($objCliente)
    {
        $this->objCliente = $objCliente;
    }

    public function cacularVenta()
    {
        $total = 0;
        foreach ($this->coleccionDeProductos as $producto) {
            $total += $producto->darPrecioVenta();
        }
        return $total;
    }
    
    public function __toString()
    {
        return "Fecha: {$this->getFecha()}\nCliente: {$this->getObjCliente()}\nProductos: {$this->getColeccionDeProductos()}\n";
    }
}
