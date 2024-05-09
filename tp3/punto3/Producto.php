<?php

class Producto
{
    private $codigoDeBarra;
    private $descripcion;
    private $stock;
    private $porcentajeIVA;
    private $costo;
    private $objRubro;

    public function __construct($codigoDeBarra, $descripcion, $stock, $porcentajeIVA, $costo, $objRubro)
    {
        $this->codigoDeBarra = $codigoDeBarra;
        $this->descripcion = $descripcion;
        $this->stock = $stock;
        $this->porcentajeIVA = $porcentajeIVA;
        $this->costo = $costo;
        $this->objRubro = $objRubro;
    }

    // Getters
    public function getCodigoDeBarra()
    {
        return $this->codigoDeBarra;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function getPorcentajeIVA()
    {
        return $this->porcentajeIVA;
    }

    public function getCosto()
    {
        return $this->costo;
    }

    public function getObjRubro()
    {
        return $this->objRubro;
    }

    // Setters
    public function setCodigoDeBarra($codigoDeBarra)
    {
        $this->codigoDeBarra = $codigoDeBarra;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    public function setPorcentajeIVA($porcentajeIVA)
    {
        $this->porcentajeIVA = $porcentajeIVA;
    }

    public function setCosto($costo)
    {
        $this->costo = $costo;
    }

    public function setObjRubro($objRubro)
    {
        $this->objRubro = $objRubro;
    }

    public function darPrecioVenta()
    {
        return $this->getCosto() * (1 + $this->getObjRubro()->getPorcentajeGanancia() / 100) * (1 + $this->getPorcentajeIVA() / 100);
    }

    public function __toString()
    {
        return "precio de venta: {$this->darPrecioVenta()}\n";
    }
}



 