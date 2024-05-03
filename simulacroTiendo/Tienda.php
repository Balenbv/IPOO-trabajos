<?php

class Tienda
{
    private $nombre;
    private $direccion;
    private $telefono;
    private $coleccionObjProducto;
    private $coleccionObjVenta;

    public function __construct($nombre, $direccion, $telefono, $coleccionObjProducto, $coleccionObjVenta)
    {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->coleccionObjProducto = $coleccionObjProducto;
        $this->coleccionObjVenta = $coleccionObjVenta;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($value)
    {
        $this->nombre = $value;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($value)
    {
        $this->direccion = $value;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($value)
    {
        $this->telefono = $value;
    }

    public function getColeccionObjProducto()
    {
        return $this->coleccionObjProducto;
    }

    public function setColeccionObjProducto($value)
    {
        $this->coleccionObjProducto = $value;
    }

    public function getColeccionObjVenta()
    {
        return $this->coleccionObjVenta;
    }

    public function setColeccionObjVenta($value)
    {
        $this->coleccionObjVenta = $value;
    }

    public function buscarProducto($codigoExterno)
    {
        $objRetorno = null;
        $i = 0;
        do {
            $objAux = $this->getColeccionObjProducto()[$i];
            if ($objAux->getCodigoBarra() == $codigoExterno) {
                $objRetorno = $objAux;
            } else {
                $i++;
            }
        } while ($i < count($this->getColeccionObjProducto()) && $objAux->getCodigoBarra() != $codigoExterno);
        return $objRetorno;
    }

    public function realizarVenta($arrayDatosProducto)
    {
        $venta = new Venta(date("d-m-Y"), null, null, null, []);
        for ($i = 0; $i < count($arrayDatosProducto["codigoBarra"]); $i++) {
            $codigo = $arrayDatosProducto["codigoBarra"][$i];
            $cantidad = $arrayDatosProducto["cantidad"][$i];
            $objConEseCodigo = $this->buscarProducto($codigo);
            $coleccionVentasAux = $this->getColeccionObjVenta();

            if ($venta->incorporarProducto($objConEseCodigo, $cantidad)) {
                $objConEseCodigo->actualizarStock($cantidad * -1);
                $coleccionVentasAux[] = $venta;
            }
        }
        $this->setColeccionObjVenta($coleccionVentasAux);
        return $venta;
    }

    public function mostrarColeccion($coleccion)
    {
        $texto = '';

        foreach ($coleccion as $obj) {
            $texto .= "\n" . $obj;
        }

        return $texto;
    }

    public function __toString()
    {
        return "Datos tienda
nombre: {$this->getNombre()}
direccion: {$this->getDireccion()}
telefono: {$this->getTelefono()}
{$this->mostrarColeccion($this->getColeccionObjProducto())}
{$this->mostrarColeccion($this->getColeccionObjVenta())}
";
    }
}
