<?php

include 'Tp3\punto3Extendido\destinos.php';
include 'Tp3\punto3Extendido\cliente.php';
include 'Tp3\punto3Extendido\paquetesTuristicos.php';
include 'Tp3\punto3Extendido\venta.php';
include 'Tp3\punto3Extendido\ventaOnline.php';
include 'Tp3\punto3Extendido\agencia.php';

$objDestino1 = new destinos("1","Bariloche",250);
$objDestino2 = new destinos("2","sanPedro",150);
$objDestino3 = new destinos("3","la casa de messi",100);
$objDestino4 = new destinos("4","francia",700);

$objPaqueteTuristico1 = new paquetesTuristicos("23/05/2014" , 3 , $objDestino1 , 25);
$objPaqueteTuristico2 = new paquetesTuristicos("20/06/2023",20,$objDestino2,20);
$objPaqueteTuristico3 = new paquetesTuristicos("10/02/2024",70,$objDestino3,10);
$objPaqueteTuristico4 = new paquetesTuristicos("10/01/2010",10,$objDestino4,20);
$bjCliente1 = new Cliente("pasaporte","123");
$objCliente2 = new Cliente("dni","124");
$objCliente3 = new Cliente("dni","120");
$objCliente4 = new Cliente("pasaporte","111");


$objVenta1 = new venta("23/05/2014",$objPaqueteTuristico1,2,$objCliente3);
$objVenta2 = new venta("20/06/2023",$objPaqueteTuristico2,2,$objCliente4);
$objVentaOnline1 = new ventaOnline("10/02/2024",$objPaqueteTuristico3,2,$bjCliente1,15);
$objVentaOnline2 = new ventaOnline("10/01/2010",$objPaqueteTuristico4,10,$objCliente2,10);






$colPaquetes[] = [$objPaqueteTuristico1,$objPaqueteTuristico2,$objPaqueteTuristico3];
$colVenta[] = [$objVenta1,$objVenta2];
$colVentaOnline[] = [$objVentaOnline1,$objVentaOnline2];
$objAgencia = new agencia($colPaquetes,$colVenta,$colVentaOnline);



$objDestino5 = new destinos("5","portugal",500);
$objPaqueteNuevo = new paquetesTuristicos("20/02/2021",10,$objDestino5,15);

echo $objAgencia-> incorporarPaquete($objPaqueteNuevo);
print_r($objAgencia->getColPaqueteTuristico());

