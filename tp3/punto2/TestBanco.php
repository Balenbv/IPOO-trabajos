<?php
include_once 'tp3\punto1\Persona.php';
include_once 'tp3\punto1\Cliente.php';
include_once 'tp3\punto2\Cuenta.php';
include_once 'tp3\punto2\CajaDeAhorro.php';
include_once 'tp3\punto2\CuentaCorriente.php';
include_once 'tp3\punto2\Banco.php';

$objCliente = new Cliente("12345678", "Juan", "Perez", 1234);
$objCliente2 = new Cliente("87654321", "Maria", "Lopez", 4321);
$objCliente3 = new Cliente("11223344", "Carlos", "Gomez", 1111);
$objCliente4 = new Cliente("44332211", "Ana", "Garcia", 2222);

$objCuenta = new Cuenta($objCliente, 10000);
$objCuenta2 = new Cuenta($objCliente2, 20000);
$objCuenta3 = new Cuenta($objCliente3, 30000);
$objCuenta4 = new Cuenta($objCliente4, 40000);

$objBanco = new Banco([], [], 0, [$objCuenta, $objCuenta2, $objCuenta3, $objCuenta4]);
$objBanco->realizarRetiro("1234", 800);

$objBanco->incorporarCajaAhorro("1234") . "\n";
$objBanco->incorporarCuentaCorriente("1111", 5000) . "\n";

echo $objBanco;
