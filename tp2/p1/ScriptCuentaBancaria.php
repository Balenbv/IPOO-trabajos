<?php
include_once "CuentaBancaria.php";
include_once "Persona.php";

$persona = new Persona("diego","rios","tipo","123456");
$testCuentaBancaria = new CuentaBancaria(1,$persona,10,1500);
//to_string
echo $testCuentaBancaria."\n";




echo "se deposito :".$testCuentaBancaria->depositar(10)."\n";

//se aplica una condicion para saber si se puede o no retirar el saldo
if($testCuentaBancaria->retirar(10)){
    echo "no se pudo retirar"."\n";
}else{
    echo "se retiro dinero , su nuevo saldo es de :".$testCuentaBancaria->getSaldoActual()."\n";
}

//se aplica un interes a la cuenta bancaria
echo "se actualizo la cuenta :".$testCuentaBancaria->actualizarSaldo()."\n";