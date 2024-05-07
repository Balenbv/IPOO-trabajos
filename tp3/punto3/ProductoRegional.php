<?php

class Regional extends Producto
{
    private $porcentajeDescuento;

    public function __construct($codigoBarra, $descripcion, $stock, $porcentajeIva, $precioCompra, $objRubro, $porcentajeDescuento)
    {
        parent::__construct($codigoBarra, $descripcion, $stock, $porcentajeIva, $precioCompra, $objRubro);
        $this->porcentajeDescuento = $porcentajeDescuento;
    }

    public function getPorcentajeDescuento()
    {
        return $this->porcentajeDescuento;
    }

    public function setPorcentajeDescuento($porcentajeDescuento)
    {
        $this->porcentajeDescuento = $porcentajeDescuento;
    }

    public function darPrecioVenta()
    {
        $precioVentaFinal = parent::darPrecioVenta();
        $precioVentaFinal = $precioVentaFinal - 1 * $this->getPorcentajeDescuento() / 100;
        return $precioVentaFinal;
    }
}
