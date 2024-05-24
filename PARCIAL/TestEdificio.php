<?php

include_once 'Edificio.php';
include_once 'Inmueble.php';
include_once 'Persona.php';

$objAdministrador = new Persona("DNI",  27432561, "Carlos", "Martinez", 154321233);

$objInquilino1 = new Persona("DNI",  12333456, "Pepe", "Suarez", 4456722);
$objInquilino2 = new Persona("DNI",  12333422, "Pepe", "Suarez", 446678);
$objInquilino3 = new Persona("DNI", 28765436, "Mariela","Suarez",25543562);

$objInmueble1 = new Inmueble("I1", 1, "local comercial",  50000, $objInquilino1);
$objInmueble2 = new Inmueble("I2", 1, "local comercial", 50000, null);
$objInmueble3 = new Inmueble("I3", 2, "departamento", 35000, $objInquilino2);
$objInmueble4 = new Inmueble("I4", 2, "departamento", 35000, null);
$objInmueble5 = new Inmueble("I5", 3, "departamento", 35000, null);

$colObjOlInmuebles = [$objInmueble1, $objInmueble2, $objInmueble3, $objInmueble4, $objInmueble5];

$objEdificio = new Edificio("Juab B. Justo 3456", $objAdministrador, $colObjOlInmuebles);

// $texto = "";
// foreach($objEdificio->darInmueblesDisponibles("departamento", 555000) as $inmuebleDisponible){
    
//     $texto .= "\n" . $inmuebleDisponible;    
// }
// echo $texto;

if ($objEdificio->registrarAlquilerInmueble("departamento", 550000, $objInquilino3)){
    echo "\nSe registo";
} else {
    echo "\nNo se registro";
}

echo $objEdificio->calculaCostoEdificio();
echo $objEdificio;