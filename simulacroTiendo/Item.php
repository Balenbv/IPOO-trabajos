<?php

class Item
{
    private $cantidadVendida;
    private $objProducto;

    public function __construct($cantidadVendida, $objProducto)
    {

        $this->cantidadVendida = $cantidadVendida;
        $this->objProducto = $objProducto;
    }

    public function getCantidadVendida()
    {
        return $this->cantidadVendida;
    }

    public function setCantidadVendida($value)
    {
        $this->cantidadVendida = $value;
    }

    public function getObjProducto()
    {
        return $this->objProducto;
    }

    public function setObjProducto($value)
    {
        $this->objProducto = $value;
    }

    public function __toString()
    {
        return "//////////////////////////
cantidad vendida: {$this->getCantidadVendida()}
///////////////////////////////////
{$this->getObjProducto()}
";
    }
}
