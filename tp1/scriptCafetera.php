<?php
include 'tp1ipoo.php';

$obj = new cafetera(1000,700,200,10);
echo $obj->llenarCafetera();
echo $obj->servirTaza();
echo $obj->vaciarCafetera();
echo $obj->agregarCafe();