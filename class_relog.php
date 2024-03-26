<?php
class reloj
{
    private int $segInt;
    private int $minInt;
    private int $horaInt;

    public function __construct($horaExt, $minExt, $segExt)
    {
        $this->segInt = $segExt;
        $this->minInt = $minExt;
        $this->horaInt = $horaExt;
    }

    public function getSeg()
    {
        return $this->segInt;
    }

    public function getMin()
    {
        return $this->minInt;
    }

    public function getHora()
    {
        return $this->horaInt;
    }

    public function setSeg($nuevoSeg)
    {
        $this->segInt = $nuevoSeg;
    }

    public function setMin($nuevoMin)
    {
        $this->minInt = $nuevoMin;
    }

    public function setHora($nuevaHora)
    {
        $this->horaInt = $nuevaHora;
    }

    public function sumaTiempo()
    {
        $segundoAux = $this->getSeg();
        $minAux = $this->getMin();
        $horaAux = $this->getHora();
        $segundoAux++;
        $minAux++;
        $horaAux++;

        if ($segundoAux > 59) {
            $this->setSeg(0);
            $minAux++;
        } else {
            $this->setSeg($segundoAux);
        }

        if ($minAux > 59) {
            $this->setMin(0);
            $horaAux++;
        } else {
            $this->setMin($minAux);
        }

        if ($horaAux > 23) {
            $this->setHora(0);
        } else {
            $this->setHora($horaAux);
        }

        $texto = "la hora ingresada + 1 da como resultado: {$this->getHora()}:{$this->getMin()}:{$this->getSeg()}";
        return $texto;
    }

    function __toString()
    {
        return $this->sumaTiempo();
    }
}
$obj = new reloj(1, 59, 59);
echo $obj;
