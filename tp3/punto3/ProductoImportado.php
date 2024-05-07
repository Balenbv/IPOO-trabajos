<?php
include 'Producto.php';
class Importado extends Producto
{

    public function __construct($codigoBarra, $descripcion, $stock, $porcentajeIva, $precioCompra, $objRubro)
    {
        parent::__construct($codigoBarra, $descripcion, $stock, $porcentajeIva, $precioCompra, $objRubro);
    }

    public function darPrecioFinal()
    {
        return parent::darPrecioVenta() * 1.5 * 1.1;
    }

    public function __toString()
    {
        $texto = parent::__toString();
        return $texto;
    }
}
