<?php
include_once 'tp2\class_Disquera.php';

require_once 'class_persona.php';

$persona = new Persona("valentin", "bustos villar", "dni", "45561002");

$objDisquera = new Disquera([13,00] , [20,00] , "cerrado", 'argentina' , $persona);

echo $objDisquera->abrirDisquera(13 , 00);

echo $objDisquera;