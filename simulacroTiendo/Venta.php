<?php

class Venta
{
    private $fecha;
    private $denominacionCliente;
    private $numFactura;
    private $tipoComprobante;
    private $coleccionObjItems;


    public function __construct($fecha, $denominacionCliente, $numFactura, $tipoComprobante, $coleccionObjItems)
    {

        $this->fecha = $fecha;
        $this->denominacionCliente = $denominacionCliente;
        $this->numFactura = $numFactura;
        $this->tipoComprobante = $tipoComprobante;
        $this->coleccionObjItems = $coleccionObjItems;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($value)
    {
        $this->fecha = $value;
    }

    public function getDenominacionCliente()
    {
        return $this->denominacionCliente;
    }

    public function setDenominacionCliente($value)
    {
        $this->denominacionCliente = $value;
    }

    public function getNumFactura()
    {
        return $this->numFactura;
    }

    public function setNumFactura($value)
    {
        $this->numFactura = $value;
    }

    public function getTipoComprobante()
    {
        return $this->tipoComprobante;
    }

    public function setTipoComprobante($value)
    {
        $this->tipoComprobante = $value;
    }

    public function getColeccionObjItems()
    {
        return $this->coleccionObjItems;
    }

    public function setColeccionObjItems($value)
    {
        $this->coleccionObjItems = $value;
    }

    public function mostrarVentas()
    {
        $texto = "";
        foreach ($this->getColeccionObjItems() as $venta) {
            $texto .= "\n" . $venta;
        }
        return $texto;
    }

    public function incorporarProducto($objProducto, $cantidadParaVender)
    {
        $seVendio = false;
        if ($objProducto != null && $cantidadParaVender <= $objProducto->getCantidadStock()) {
            $objItem = new Item($cantidadParaVender, $objProducto);
            $itemsAux = $this->getColeccionObjItems();
            $itemsAux[] = $objItem;
            $this->setColeccionObjItems($itemsAux);
            $seVendio = true;
        }
        return $seVendio;
    }

    public function __toString()
    {
        return "datos Venta:
fecha: {$this->getFecha()}
denominacion de la venta: {$this->getDenominacionCliente()}
numero de factura{$this->getNumFactura()}
tipo de comprobante: {$this->getTipoComprobante()}
{$this->mostrarVentas()}";
    }
}
