<?php

class Producto
{

    private $codigoBarra;
    private $nombre;
    private $marca;
    private $color;
    private $talle;
    private $descripcion;
    private $cantidadStock;

    public function __construct($codigoBarra, $nombre, $marca, $color, $talle, $descripcion, $cantidadStock)
    {

        $this->codigoBarra = $codigoBarra;
        $this->nombre = $nombre;
        $this->marca = $marca;
        $this->color = $color;
        $this->talle = $talle;
        $this->descripcion = $descripcion;
        $this->cantidadStock = $cantidadStock;
    }

    public function getCodigoBarra()
    {
        return $this->codigoBarra;
    }

    public function setCodigoBarra($value)
    {
        $this->codigoBarra = $value;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($value)
    {
        $this->nombre = $value;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($value)
    {
        $this->marca = $value;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($value)
    {
        $this->color = $value;
    }

    public function getTalle()
    {
        return $this->talle;
    }

    public function setTalle($value)
    {
        $this->talle = $value;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($value)
    {
        $this->descripcion = $value;
    }

    public function getCantidadStock()
    {
        return $this->cantidadStock;
    }

    public function setCantidadStock($value)
    {
        $this->cantidadStock = $value;
    }

    public function actualizarStock($nuevaCantidad)
    {
        if ($nuevaCantidad > 0) {
            $stockAux = $this->getCantidadStock() + $nuevaCantidad;
            $this->setCantidadStock($stockAux);
        } else if ($nuevaCantidad < 0) {
            $stockAux = $this->getCantidadStock() + $nuevaCantidad;
            $this->setCantidadStock($stockAux);
        }
    }

    public function __toString()
    {
        return "\nDatos Producto:
codigo de barra: {$this->getCodigoBarra()}
nombre: {$this->getNombre()}
marca: {$this->getMarca()}
color: {$this->getColor()}
talle: {$this->getTalle()}
descripcion: {$this->getDescripcion()}
stock: {$this->getCantidadStock()}
";
    }
}
