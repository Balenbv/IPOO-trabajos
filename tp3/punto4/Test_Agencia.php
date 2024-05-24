<?php

include 'tp3\punto4\Destino.php';
include 'tp3\punto4\Cliente.php';
include 'tp3\punto4\PaqueteTuristico.php';
include 'tp3\punto4\Venta.php';
include 'tp3\punto4\OnLine.php';
include 'tp3\punto4\Agencia.php';
include 'tp3\punto4\Fecha.php';

$objFechaPaqueteTuristico1 = new Fecha(10, 2, 2010);
$objFechaPaqueteTuristico2 = new Fecha(20, 6, 2010);
$objFechaPaqueteTuristico3 = new Fecha(12, 1, 2010);
$objFechaPaqueteTuristico4 = new Fecha(10, 4, 2010);

$objFechaVenta1 = new Fecha(23, 5, 2010);
$objFechaVenta2 = new Fecha(20, 6, 2023);
$objFechaVenta3 = new Fecha(12, 1, 2010);
$objFechaVentaOnline1 = new Fecha(10, 2, 2012);
$objFechaVentaOnline2 = new Fecha(30, 7, 2015);

$objDestino1 = new Destino("1","Bariloche",250);
$objDestino2 = new Destino("2","sanPedro",150);
$objDestino3 = new Destino("3","la casa de messi",100);
$objDestino4 = new Destino("4","francia",700);
$objDestino5 = new Destino("5","portugal",500);

$objPaqueteTuristico1 = new PaqueteTuristico($objFechaPaqueteTuristico1 , 3 , $objDestino1 , 25);
$objPaqueteTuristico2 = new PaqueteTuristico($objFechaPaqueteTuristico2,20,$objDestino2,20);
$objPaqueteTuristico3 = new PaqueteTuristico($objFechaPaqueteTuristico3,70,$objDestino3,10);
$objPaqueteTuristico4 = new PaqueteTuristico($objFechaPaqueteTuristico4,10,$objDestino4,20);
$objPaqueteNuevo = new PaqueteTuristico("20/02/2021",10,$objDestino5,15);

$objCliente1 = new Cliente("pasaporte","123");
$objCliente2 = new Cliente("dni","124");
$objCliente3 = new Cliente("dni","120");
$objCliente4 = new Cliente("pasaporte","111");
$objCliente5 = new Cliente("dni","222");

$objVenta1 = new Venta($objFechaVenta1,$objPaqueteTuristico1,2,$objCliente1);
$objVenta2 = new Venta($objFechaVenta2,$objPaqueteTuristico2,2,$objCliente2);
$objVenta3 = new Venta($objFechaVenta3,$objPaqueteTuristico3,80,$objCliente3);

$objVentaOnline1 = new Online($objFechaVentaOnline1 ,$objPaqueteTuristico3,2,$objCliente4,15);
$objVentaOnline2 = new Online($objFechaVentaOnline2,$objPaqueteTuristico4,10,$objCliente5,1);

$colDestinos = [$objDestino1, $objDestino2, $objDestino3, $objDestino4];
$colPaquetes = [$objPaqueteTuristico1,$objPaqueteTuristico2,$objPaqueteTuristico3, $objPaqueteTuristico4];
$colVenta = [$objVenta1,$objVenta2, $objVenta3];
$colVentaOnline = [$objVentaOnline1,$objVentaOnline2];
$objAgencia = new Agencia($colDestinos,$colPaquetes,$colVenta,$colVentaOnline);


// echo $objAgencia-> incorporarPaquete($objPaqueteNuevo);
// print_r($objAgencia->getPaquetesTuristicos());

//echo $objAgencia->incorporarVenta($objPaqueteTuristico6, 10, 26, 25, false);

//$objAgencia->paqueteMasEcomomico("23/05/2014", $objDestino0);

$objAgencia->informarPaquetesMasVendido("2010", 1);