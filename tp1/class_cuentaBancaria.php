<?php
class cuentaBancaria
{
    private int $numeroCuentaInt;
    private int $dniClienteInt;
    private float $saldoActualInt;
    private int $interesAnualInt;

    public function __construct($numeroCuentaExt, $dniClienteExt, $saldoActualExt, $interesAnualExt)
    {
        $this->numeroCuentaInt = $numeroCuentaExt;
        $this->dniClienteInt = $dniClienteExt;
        $this->saldoActualInt = $saldoActualExt;
        $this->interesAnualInt = $interesAnualExt;
    }

    public function getNumeroCuenta()
    {
        return $this->numeroCuentaInt;
    }

    public function getDniCliente()
    {
        return $this->dniClienteInt;
    }

    public function getSaldoActual()
    {
        return $this->saldoActualInt;
    }

    public function getInteresAnual()
    {
        return $this->interesAnualInt;
    }

    public function actualizarSaldo()
    {
        $this->saldoActualInt += $this->getInteresAnual() / 365;
    }

    public function depositar($cantidad)
    {
        $this->saldoActualInt += $cantidad;
    }

    public function retirar($cantidad)
    {
        if ($cantidad <= $this->saldoActualInt) {
            $this->saldoActualInt -= $cantidad;
        } else {
            return "no hay saldo suficiente";
        }
    }

    public function __toString()
    {
        $this->actualizarSaldo();
        return "el saldo actual es: {$this->getSaldoActual()}";
    }
}
$obj = new cuentaBancaria(38, 45561002, 100, 36500);
echo $obj;
