<?php


class Local
{
    private $coleccionDeProductosImportados;
    private $coleccionDeProductosRegionales;
    private $coleccionDeVentas;

    public function __construct($coleccionDeProductosImportados, $coleccionDeProductosRegionales, $coleccionDeVentas)
    {
        $this->coleccionDeProductosImportados = $coleccionDeProductosImportados;
        $this->coleccionDeProductosRegionales = $coleccionDeProductosRegionales;
        $this->coleccionDeVentas = $coleccionDeVentas;
    }

    public function getColeccionDeProductosImportados()
    {
        return $this->coleccionDeProductosImportados;
    }

    public function setColeccionDeProductosImportados($coleccionDeProductosImportados)
    {
        $this->coleccionDeProductosImportados = $coleccionDeProductosImportados;
    }

    public function getColeccionDeProductosRegionales()
    {
        return $this->coleccionDeProductosRegionales;
    }

    public function setColeccionDeProductosRegionales($coleccionDeProductosRegionales)
    {
        $this->coleccionDeProductosRegionales = $coleccionDeProductosRegionales;
    }

    public function getColeccionDeVentas()
    {
        return $this->coleccionDeVentas;
    }

    public function setColeccionDeVentas($coleccionDeVentas)
    {
        $this->coleccionDeVentas = $coleccionDeVentas;
    }

    public function obtenerProductosEnStock()
    {
        $coleccionProductos = $this->getColeccionDeProductosImportados();
        foreach ($this->getColeccionDeProductosRegionales() as $productoRegional) {
            $coleccionProductos[] = $productoRegional;
        }
        return $coleccionProductos;
    }

    public function incorporarProducto($codigoBarra)
    {
        $coleccionProductos = $this->obtenerProductosEnStock();
        $i = 0;
        $seIncorpora = false;
        do {
            if ($coleccionProductos[$i]->getCodigoDeBarra() == $codigoBarra && !$seIncorpora) {
                $seIncorpora = !$seIncorpora;
            } else {
                $i++;
            }
        } while ($i < count($coleccionProductos) && !$seIncorpora);

        return $seIncorpora;
    }

    public function retornarImporteProducto($codigoBarra)
    {
        $coleccionProductos = $this->obtenerProductosEnStock();
        $i = 0;
        $producto = null;
        do {
            if ($coleccionProductos[$i]->getCodigoDeBarra() == $codigoBarra && $producto != null) {
                $producto = $coleccionProductos[$i]->darPrecioVenta();
            } else {
                $i++;
            }
        } while ($i < count($coleccionProductos) && $producto == null);
        return $producto;
    }

    public function retornarCostoProductoLocal()
    {
        $coleccionProductos = $this->obtenerProductosEnStock();
        $total = 0;
        foreach ($coleccionProductos as $producto) {
            $total += $producto->darPrecioVenta();
        }
        return $total;
    }

    public function productoMasEconomico($rubro)
    {
        $coleccionProductos = $this->obtenerProductosEnStock();
        $primeraVuelta = true;
        $productoMasbarato = $coleccionProductos[0];
        foreach ($coleccionProductos as $producto) {
            if ($producto->getObjRubro()->getDescripcion() == $rubro->getDescripcion()) {
                if ($primeraVuelta) {
                    $productoMasbarato = $producto;
                    $primeraVuelta = false;
                } else {
                    if ($producto->darPrecioVenta() < $productoMasbarato->darPrecioVenta()) {
                        $productoMasbarato = $producto;
                    }
                }
            }
        }
        return $productoMasbarato;
    }

    public function codigosDeLosProductos()
    {
        $coleccionProductos[] = $this->obtenerProductosEnStock();
        $coleccionCodigos = [];

        foreach ($coleccionProductos as $producto) {
            if ($this->incorporarProducto($producto->getCodigoDeBarra())) {
                $coleccionCodigos[] = $producto->getCodigoDeBarra();
            }
        }
        return $coleccionCodigos;
    }

    public function obtenerVentasPorAnio($anio)
    {
        $coleccionVentasEseAnio = [];
        foreach ($this->getColeccionDeVentas() as $ventas) {
            if (date("Y", strtotime($ventas->getFecha())) == $anio) {
                $coleccionVentasEseAnio[] = $ventas;
            }
        }
        return $coleccionVentasEseAnio;
    }

    public function obtenerProductosVendidosPorAnio($coleccionVentas)
    {
        $arrayProductosVendidosRepetidos = [];
        foreach ($coleccionVentas as $venta) {
            foreach ($venta->getColeccionDeProductos() as $producto) {
                $arrayProductosVendidosRepetidos[] = $producto;
            }
        }
        return $arrayProductosVendidosRepetidos;
    }

    public function acumularProductos($coleccionCodigos, $coleccionProductos)
    {
        $coleccionProductosMismoCodigoAcumulados = [];
        $i = 0;
        foreach ($coleccionCodigos as $codigo) {
            $coleccionProductosMismoCodigoAcumulados[1][$i] = 0;
            foreach ($coleccionProductos as $producto) {
                if ($codigo == $producto->getCodigoDeBarra()) {
                    $coleccionProductosMismoCodigoAcumulados[0][$i] = $producto->getCodigoDeBarra();
                    $coleccionProductosMismoCodigoAcumulados[1][$i] += $producto->getStock();
                }
            }
            if ($i < count($coleccionProductosMismoCodigoAcumulados)) {
                $i++;
            }
        }
        return $coleccionProductosMismoCodigoAcumulados;
    }

    public function informarProductosMasVendidos($anio, $n)
    {
        $coleccionProductos = $this->obtenerProductosEnStock();
        $coleccionCodigos = $this->codigosDeLosProductos();

        $coleccionVentasEseAnio = $this->obtenerVentasPorAnio($anio);
        $arrayProductosVendidosRepetidos = $this->obtenerProductosVendidosPorAnio($coleccionVentasEseAnio);
        $coleccionProductosMismoCodigoAcumulados = $this->acumularProductos($coleccionCodigos, $arrayProductosVendidosRepetidos);

        uasort($coleccionProductosMismoCodigoAcumulados[1], 'ordenarArray');

        return array_slice($coleccionProductosMismoCodigoAcumulados[0], 0, $n);
    }

    public function ordenarArray($a, $b)
    {
        if ($a == $b) {
            $retorno = 0;
        } else {
            $retorno = ($a < $b) ? 1 : -1;
        }

        return $retorno;
    }
}
