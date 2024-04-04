<?php
include_once 'tp2\class_Disquera.php';

include_once 'class_persona.php';

$persona = new Persona("valentin", "bustos villar", "dni", "4234234002");

$objDisquera = new Disquera([13, 00], [20, 00], "cerrado", 'argentina', $persona);

echo $objDisquera->abrirDisquera(20, 01);

echo $objDisquera;
