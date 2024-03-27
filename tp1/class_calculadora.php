<?php
class calculadora
{

    private float $numero1;
    private float $numero2;

    public function __construct($primerNumero, $segundoNumero)
    {
        $this->numero1 = $primerNumero;
        $this->numero2 = $segundoNumero;
    }

    public function getNumero1()
    {
        return $this->numero1;
    }
    public function getNumero2()
    {
        return $this->numero2;
    }

    public function setNumero1($nuevoPrimerNumero)
    {
        $this->numero1 = $nuevoPrimerNumero;
    }

    public function setNumero2($nuevoSegundoNumero)
    {
        $this->numero2 = $nuevoSegundoNumero;
    }

    public function suma()
    {
        return $this->getNumero1() + $this->getNumero2();
    }

    public function resta()
    {
        return $this->getNumero1() - $this->getNumero2();
    }

    public function multiplicacion()
    {

        return $this->getNumero1() * $this->getNumero2();
    }

    public function division()
    {
        return $this->getNumero1() / $this->getNumero2();
    }

    public function __toString()
    {
        return "
    la suma de {$this->getNumero1()} + {$this->getNumero2()} es: {$this->suma()}
    la resta de {$this->getNumero1()} - {$this->getNumero2()} es: {$this->resta()}
    la multiplicacion de {$this->getNumero1()} * {$this->getNumero2()} es: {$this->multiplicacion()}
    la division de {$this->getNumero1()} / {$this->getNumero2()} es: {$this->division()}";
    }
}
$obj = new calculadora(25, 5);
echo $obj;
