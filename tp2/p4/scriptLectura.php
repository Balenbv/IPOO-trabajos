<?php
include_once 'tp1\classLibro\class_libro.php';
include_once 'tp2\p2\class_Persona.php';
include_once 'tp2\p4\class_Lectura.php';

$personaTest = new Persona('valentin', 'bustos villar', 'dni', '091837');
$personaTest1 = new Persona('pedro', 'tortuga', 'dni', '2355');
$personaTest2 = new Persona('juan', 'bustos villar', 'dni', '34537');
$personaTest3 = new Persona('valentin', 'bustos villar', 'dni', '234837');

$libroTest = new Libro(123, "valen y sus esbirros", 1380, 'migue post servicio social', $personaTest, 800, "valen se volvio periquedo y migue intentado cambiar su rumbo se volvio un villano violento");
$libroCocina = new Libro(456,"El arte de la cocina vegana",1500,"Ana Recetas Saludables",$personaTest1,400,"Recetas veganas deliciosas y nutritivas para toda la familia.");
$novelaMisterio = new Libro(789,"La sombra del asesino",2200,"Agatha Christie",$personaTest2,450,"Un detective retirado se enfrenta a un nuevo caso que pondrá a prueba su ingenio.");
$libroAutoayuda = new Libro(1011, "Desarrolla tu potencial interior", 2200, "John Doe", $personaTest3, 500, "Guía práctica para alcanzar tus metas y vivir una vida plena.");
  
$coleccionLibros = [$libroTest, $libroCocina, $novelaMisterio, $libroAutoayuda];

$newLectura = new Lectura($libroTest, 40, $coleccionLibros);

$newLectura->darLibrosPorAutor('valentin');
