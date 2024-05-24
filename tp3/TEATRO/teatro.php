<?php


/*
Modificar la clase Teatro (Ejercicio 8 TP 2) para que ahora las actividades del teatro puedan ser ahora: 
Teatro, Cine y Musicales. Sin embargo, 
 Para ello se solicita implementar el método darCostos, el cual determina según las actividades 
del teatro cuál debería ser el cobro obtenido. Para obtener el mismo, hay que tener en cuenta que se deben 
sumar los precios de cada tipo de actividad programada para un mes dado, y aplicar un incremento por 
actividad según se detalle:
8.1. Si es una obra de teatro: 45%
8.2. Si es un musical: 12%
8.3. Si es un película: 65%.
*/

class Teatro
{
    private $nombre;
    private $direccion;
    private $funciones;

    public function __construct($nombre, $direccion, $funciones)
    {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->funciones = $funciones;
    }
}
