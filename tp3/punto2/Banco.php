<?php
class Banco
{
    private $coleccionCuentasCorrientes;
    private $coleccionCajasDeAhorro;
    private $ultimoValorCuentaAsignado;
    private $coleccionCuentasClientes;

    public function __construct($coleccionCuentasCorrientes, $coleccionCajasDeAhorro, $ultimoValorCuentaAsignado, $coleccionCuentasClientes)
    {
        $this->coleccionCuentasCorrientes = $coleccionCuentasCorrientes;
        $this->coleccionCajasDeAhorro = $coleccionCajasDeAhorro;
        $this->ultimoValorCuentaAsignado = $ultimoValorCuentaAsignado;
        $this->coleccionCuentasClientes = $coleccionCuentasClientes;
    }

    // Getters
    public function getColeccionCuentasCorrientes()
    {
        return $this->coleccionCuentasCorrientes;
    }

    public function getColeccionCajasDeAhorro()
    {
        return $this->coleccionCajasDeAhorro;
    }

    public function getUltimoValorCuentaAsignado()
    {
        return $this->ultimoValorCuentaAsignado;
    }

    public function getColeccionCuentasClientes()
    {
        return $this->coleccionCuentasClientes;
    }

    // Setters
    public function setColeccionCuentasCorrientes($coleccionCuentasCorrientes)
    {
        $this->coleccionCuentasCorrientes = $coleccionCuentasCorrientes;
    }

    public function setColeccionCajasDeAhorro($coleccionCajasDeAhorro)
    {
        $this->coleccionCajasDeAhorro = $coleccionCajasDeAhorro;
    }

    public function setUltimoValorCuentaAsignado($ultimoValorCuentaAsignado)
    {
        $this->ultimoValorCuentaAsignado = $ultimoValorCuentaAsignado;
    }

    public function setColeccionCuentasClientes($coleccionCuentasClientes)
    {
        $this->coleccionCuentasClientes = $coleccionCuentasClientes;
    }

    public function incorporarCliente($objCliente)
    {
        $coleccionCuentasClientes = $this->getColeccionCuentasClientes();
        $coleccionCuentasClientes[] = $objCliente;
        $this->setColeccionCuentasClientes($coleccionCuentasClientes);
    }

    public function incorporarCuentaCorriente($numeroCliente, $montoDescubierto)
    {
        $i = 0;
        do {
            if ($this->getColeccionCuentasClientes()[$i]->getObjCliente()->getNumeroCliente() == $numeroCliente) {
                $arrayCuentasCorrientes = $this->getColeccionCuentasCorrientes();
                $arrayCuentasCorrientes[] = new CuentaCorriente($montoDescubierto, $this->getColeccionCuentasClientes()[$i], $this->getColeccionCuentasClientes()[$i]->getSaldo());
                $this->setColeccionCuentasCorrientes($arrayCuentasCorrientes);
            } else {
                $i++;
            }
        } while ($this->getColeccionCuentasClientes()[$i]->getObjCliente()->getNumeroCliente() != $numeroCliente && $i < count($this->getColeccionCuentasClientes()));
        return ($this->getColeccionCuentasClientes()[$i]->getObjCliente()->getNumeroCliente() == $numeroCliente);
    }


    public function incorporarCajaAhorro($numeroCliente)
    {
        $i = 0;
        do {
            if ($this->getColeccionCuentasClientes()[$i]->getObjCliente()->getNumeroCliente() == $numeroCliente) {
                $arrayCajasAhorro = $this->getColeccionCajasDeAhorro();
                $arrayCajasAhorro[] = new CajaDeAhorro($this->getColeccionCuentasClientes()[$i],null);
                $this->setColeccionCajasDeAhorro($arrayCajasAhorro);
            } else {
                $i++;
            }
        } while ($this->getColeccionCuentasClientes()[$i]->getObjCliente()->getNumeroCliente() != $numeroCliente && $i < count($this->getColeccionCuentasClientes()));

        return ($this->getColeccionCuentasClientes()[$i]->getObjCliente()->getNumeroCliente() == $numeroCliente);
    }


    public function realizarDeposito($numeroCliente, $monto)
    {
        $i = 0;
        do {
            if ($this->getColeccionCuentasClientes()[$i]->getObjCliente()->getNumeroCliente() == $numeroCliente) {
                $this->getColeccionCuentasClientes()[$i]->realizarDeposito($monto);
            }
            $i++;
        } while ($i < count($this->getColeccionCuentasClientes()) && $this->getColeccionCuentasClientes()[$i]->getObjCliente()->getNumeroCliente() != $numeroCliente);
        return ($this->getColeccionCuentasClientes()[$i - 1]->getObjCliente()->getNumeroCliente() == $numeroCliente);
    }

    public function realizarRetiro($numeroCliente, $monto)
    {
        $i = 0;
        do {
            if ($this->getColeccionCuentasClientes()[$i]->getObjCliente()->getNumeroCliente() == $numeroCliente) {
                $this->getColeccionCuentasClientes()[$i]->realizarRetiro($monto);
            } else{
                $i++;
            }
            
        } while ($i < count($this->getColeccionCuentasClientes()) && $this->getColeccionCuentasClientes()[$i]->getObjCliente()->getNumeroCliente() != $numeroCliente);
        return ($this->getColeccionCuentasClientes()[$i]->getObjCliente()->getNumeroCliente() == $numeroCliente);
    }

    public function obtenerClientes()
    {
        $clientes = "";
        foreach ($this->getColeccionCuentasClientes() as $cliente) {
            $clientes .= "\n\n------------\n" . $cliente;
        }
        return $clientes;
    }

    public function obtenerCajasDeAhorro()
    {
        $cajasDeAhorro = "";
        foreach ($this->getColeccionCajasDeAhorro() as $cajaDeAhorro) {
            $cajasDeAhorro .= "\n\n------------\n" . $cajaDeAhorro;
        }
        return $cajasDeAhorro;
    }

    public function obtenerCuentasCorrientes()
    {
        $cuentasCorrientes = "";
        foreach ($this->getColeccionCuentasCorrientes() as $cuentaCorriente) {
            $cuentasCorrientes .= "\n\n------------\n" . $cuentaCorriente;
        }
        return $cuentasCorrientes;
    }

    public function __toString()
    {
        return "Banco: \nCajas de ahorro:" . $this->obtenerCajasDeAhorro() . "\nCuentas corrientes:\n" . $this->obtenerCuentasCorrientes();
    }
}
