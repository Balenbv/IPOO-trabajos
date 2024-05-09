<?php
include_once 'tp3\punto1\Persona.php';
include_once 'tp3\punto1\Cliente.php';
include_once 'tp3\punto2\Cuenta.php';
include_once 'tp3\punto2\CajaDeAhorro.php';
include_once 'tp3\punto2\CuentaCorriente.php';
include_once 'tp3\punto2\Banco.php';

$objCliente = new Cliente("12345678", "Juan", "Perez", 1234);
$objCliente2 = new Cliente("87654321",  "Maria", "Lopez", 4321);
$objCliente3 = new Cliente("11223344", "Carlos", "Gomez", 1111);
$objCliente4 = new Cliente("44332211",  "Ana", "Garcia", 2222);

$objCuenta = new Cuenta($objCliente, 10000);
$objCuenta2 = new Cuenta($objCliente2, 20000);
$objCuenta3 = new Cuenta($objCliente3, 30000);
$objCuenta4 = new Cuenta($objCliente4, 40000);

$objClienteA = new Cliente("11111", "diego", "rios", 147);
$objClienteB = new Cliente("222222", "aurelio", "marco", 1471);

$objCuentaCorriente1 = new CuentaCorriente($objClienteA, 10, 100);
$objCuentaCorriente2 = new CuentaCorriente($objClienteB, 20, 100);
$coleccionCuentaCorrientes = [$objCuentaCorriente1, $objCuentaCorriente2];
$coleccionCajasAhorro = [$objCuenta, $objCuenta2, $objCuenta3, $objCuenta4];

$objBanco = new Banco($coleccionCuentaCorrientes, $coleccionCajasAhorro, 0, [$objCuenta, $objCuenta2, $objCuenta3, $objCuenta4]);


$objBanco->incorporarCuentaCorriente("4321", 10 );

echo $objBanco;
