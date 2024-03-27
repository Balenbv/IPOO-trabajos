<?php
class cafetera
{
    private int $capacidadMaximaInt;
    private int $cantidadActualInt;
    private int $capacidadMaximaTazaInt;
    private int $cantidadActualTazaInt;

    public function __construct($capacidadMaximaExt, $cantidadActualExt, $cantidadMaximaTazaExt, $cantidadActualTazaExt)
    {
        $this->capacidadMaximaInt = $capacidadMaximaExt;
        $this->cantidadActualInt = $cantidadActualExt;
        $this->capacidadMaximaTazaInt = $cantidadMaximaTazaExt;
        $this->cantidadActualTazaInt = $cantidadActualTazaExt;
    }

    public function getCapacidadMaximaCafetera()
    {
        return $this->capacidadMaximaInt;
    }

    public function getCantidadActualCafetera()
    {
        return $this->cantidadActualInt;
    }

    public function getCapacidadMaximaTazaInt()
    {
        return $this->capacidadMaximaTazaInt;
    }

    public function getCantidadActualTaza()
    {
        return $this->cantidadActualTazaInt;
    }

    public function setCantidaActualTaza($nuevaCantidad)
    {
        $this->cantidadActualTazaInt = $nuevaCantidad;
    }

    public function setCantidadActualCafetera($nuevaCantidad)
    {
        $this->cantidadActualInt = $nuevaCantidad;
    }

    public function llenarCafetera()
    {
        $this->setCantidadActualCafetera($this->getCapacidadMaximaCafetera());
        return "Se lleno la cafetera." . $this->__toString();
    }

    public function servirTaza()
    {
        if ($this->getCantidadActualCafetera() + $this->getCantidadActualTaza() < $this->getCapacidadMaximaTazaInt()) {
            $this->setCantidaActualTaza($this->getCantidadActualCafetera());
            $texto = 'la cantidad de cafe actual en la cafetera, no alcanza para llenar la taza';
        } else {
            $this->setCantidaActualTaza($this->getCapacidadMaximaTazaInt());
            $texto = 'la cantidad de cafe actual en la cafetera, si alcanzo para llenar su taza';
        }
        return $texto;
    }

    public function vaciarCafetera()
    {
        $this->setCantidadActualCafetera(0);
        return "Se vacio la cafetera" . $this->__toString();
    }

    public function agregarCafe()
    {
        $cantidad = trim(fgets(STDIN));
        $this->setCantidadActualCafetera($cantidad);
        return "se agrego cafe." . $this->__toString();
    }

    public function __toString()
    {
        return
            "
    La cantidad Maxima de la cafetera es: {$this->getCapacidadMaximaCafetera()} y su cantidad actual es: {$this->getCantidadActualCafetera()}
    La cantidad Maxima de la taza es: {$this->getCapacidadMaximaTazaInt()} y su cantidad actual es {$this->getCantidadActualTaza()}
    \n";
    }
}
$obj = new cafetera(1000, 700, 200, 10);
echo $obj->llenarCafetera() . "\n" . $obj->servirTaza() . "\n" . $obj->vaciarCafetera() . "\n" . $obj->agregarCafe();
