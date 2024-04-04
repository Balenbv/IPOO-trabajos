<?php
include_once 'tp1\classLibro\class_libro.php';
include_once 'tp2\p2\class_Persona.php';
include_once 'tp2\p3\class_Lectura.php';

$personaTest = new Persona('valentin', 'bustos villar', 'dni', '091837');
$libroTest = new Libro(123, "valen y sus esbirros", 1380, 'migue post servicio social', $personaTest, 800, "valen se volvio periquedo y migue intentado cambiar su rumbo se volvio un villano violento");
$newLectura = new Lectura($libroTest, 40);

echo $newLectura->siguientePagina();

echo "\n".$newLectura;

$newLectura->anteriorPagina();
$newLectura->anteriorPagina();
$newLectura->anteriorPagina();
$newLectura->anteriorPagina();

echo "\n".$newLectura;