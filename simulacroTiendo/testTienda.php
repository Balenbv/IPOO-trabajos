<?php
include_once 'Item.php';
include_once 'Producto.php';
include_once 'Venta.php';
include_once 'Tienda.php';

$coleccionObjProductos =
    [
        new Producto(0001, "hoddie", "bape", "morado", "M", "hoddie bape", 3),
        new Producto(15, "buzo", "nike", "rojo", "S", "buzo nike", 32),
        new Producto(10, "gorra", "NBA", "negro", "M", "gorra NBA", 80),
        new Producto(5, "remera", "bape", "marron", "XXL", "remera bape", 100)
    ];
$objTienda = new Tienda("indumentaria extranjera", "mengelle 329", "29982345", $coleccionObjProductos, []);
$arrayAsociativo = ["codigoBarra" => [0001, 15, 10, 5], "cantidad" => [5, 10, 63, 10]];
$objTienda->realizarVenta($arrayAsociativo);
echo $objTienda;
