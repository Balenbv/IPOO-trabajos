<?php

include 'tp3\punto4\Destino.php';
include 'tp3\punto4\Cliente.php';
include 'tp3\punto4\PaqueteTuristico.php';
include 'tp3\punto4\Venta.php';
include 'tp3\punto4\OnLine.php';
include 'tp3\punto4\Agencia.php';

$objDestino1 = new Destino("1","Bariloche",250);
$objDestino2 = new Destino("2","sanPedro",150);
$objDestino3 = new Destino("3","la casa de messi",100);
$objDestino4 = new Destino("4","francia",700);
$colDestinos = [$objDestino1, $objDestino2, $objDestino3, $objDestino4];

$objPaqueteTuristico1 = new PaqueteTuristico("10/01/2010" , 3 , $objDestino1 , 25);
$objPaqueteTuristico2 = new PaqueteTuristico("20/06/2023",20,$objDestino2,20);
$objPaqueteTuristico3 = new PaqueteTuristico("10/02/2024",70,$objDestino3,10);
$objPaqueteTuristico4 = new PaqueteTuristico("10/01/2010",10,$objDestino1,20);

$objCliente1 = new Cliente("pasaporte","123");
$objCliente2 = new Cliente("dni","124");
$objCliente3 = new Cliente("dni","120");
$objCliente4 = new Cliente("pasaporte","111");

$objVenta1 = new venta("23/05/2014",$objPaqueteTuristico1,2,$objCliente3);
$objVenta2 = new venta("20/06/2023",$objPaqueteTuristico2,2,$objCliente1);
$objVentaOnline1 = new Online("10/02/2024",$objPaqueteTuristico3,2,$objCliente1,15);
$objVentaOnline2 = new Online("10/01/2010",$objPaqueteTuristico4,10,$objCliente2,1);

$colPaquetes = [$objPaqueteTuristico1,$objPaqueteTuristico2,$objPaqueteTuristico3];
$colVenta = [$objVenta1,$objVenta2];
$colVentaOnline = [$objVentaOnline1,$objVentaOnline2];
$objAgencia = new Agencia($colDestinos,$colPaquetes,$colVenta,$colVentaOnline);

$objDestino5 = new Destino("5","portugal",500);
$objPaqueteNuevo = new PaqueteTuristico("20/02/2021",10,$objDestino5,15);

// echo $objAgencia-> incorporarPaquete($objPaqueteNuevo);
// print_r($objAgencia->getPaquetesTuristicos());

//echo $objAgencia->incorporarVenta($objPaqueteTuristico6, 10, 26, 25, false);

//$objAgencia->paqueteMasEcomomico("23/05/2014", $objDestino0);

print_r($objAgencia->informarConsumoCliente("pasaporte","123"));
