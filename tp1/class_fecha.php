<?php
class fecha
{
    private int $diaInt;
    private int $mesInt;
    private int $anioInt;
    private int $incremento;

    public function __construct($diaExt, $mesExt, $anioExt, $incrementoExt)
    {
        $this->diaInt = $diaExt;
        $this->mesInt = $mesExt;
        $this->anioInt = $anioExt;
        $this->incremento = $incrementoExt;
    }

    public function getDia()
    {
        return $this->diaInt;
    }

    public function getMes()
    {
        return $this->mesInt;
    }

    public function getAnio()
    {
        return $this->anioInt;
    }

    public function getIncremento()
    {
        return $this->incremento;
    }

    public function setDia($nuevoDia)
    {
        $this->diaInt = $nuevoDia;
    }

    public function setMes($nuevoMes)
    {
        $this->mesInt = $nuevoMes;
    }

    public function setAnio($nuevoAnio)
    {
        $this->anioInt = $nuevoAnio;
    }

    public function esBisiesto()
    {
        return $this->getAnio() % 4 == 0 && ($this->getAnio() % 100 != 0 || $this->getAnio() % 400 == 0);
    }

    public function definirMes()
    {
        $meses = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];
        if ($this->getMes() >= 1 && $this->getMes() < 13) {
            return  $meses[$this->getMes() - 1];
        } else {
            return false;
        }
    }

    public function diasMeses()
    {
        $diaMeses = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        if ($this->esBisiesto()) {
            $diaMeses[1] = 29;
        }
        if ($this->getMes() > 0 && $this->getMes() < 13) {
            return $diaMeses[$this->getMes() - 1];
        }
    }

    public function fechaValida()
    {
        if ($this->diasMeses() != false && $this->getDia() > 0 && $this->getDia() <= $this->diasMeses()) {
            return true;
        } else {
            return false;
        }
    }

    public function incremental()
    {
        if ($this->fechaValida()) {
            for ($i = 0; $i < $this->getIncremento(); $i++) {
                $this->setDia($this->getDia() + 1);
                if ($this->getDia() > $this->diasMeses()) {
                    $this->setDia(1);
                    $this->setMes($this->getMes() + 1);
                    if ($this->getMes() > 12) {
                        $this->setAnio($this->getAnio() + 1);
                        $this->setMes(1);
                    }
                }
            }
            $this->definirMes();
            return "{$this->getDia()}/{$this->getMes()}/{$this->getAnio()} \n{$this->getDia()} de {$this->definirMes()} de {$this->getAnio()}";
        } else {
            return "fecha invalida";
        }
    }

    public function __toString()
    {
        return "{$this->incremental()}";
    }
}
$obj = new fecha(23, 2, 2014, 20);
echo $obj;
