<?php

class OnLine extends Venta{
    private $porcentajeDescuento;
    
    public function __construct($fecha, $objPaqueteTuristico, $cantidadPersonas, $objCliente, $porcentajeDescuento) {
        parent::__construct($fecha, $objPaqueteTuristico, $cantidadPersonas, $objCliente);
        $this->porcentajeDescuento = $porcentajeDescuento;
    }

    public function getPorcentajeDescuento() {
        return $this->porcentajeDescuento;
    }

    public function setPorcentajeDescuento($porcentajeDescuento) {
        $this->porcentajeDescuento = $porcentajeDescuento;
    }

    public function ImporteFinal(){
        return parent::ImporteFinal() - parent::ImporteFinal() * $this->porcentajeDescuento / 100;
    }

    public function __toString()
    {
        return parent::__toString() . "Porcentaje de descuento: " . $this->porcentajeDescuento . "\n";
    }
}