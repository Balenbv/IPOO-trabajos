<?php
class Lectura{
    private $objLibroInt;
    private $paginaInt;

    public function __construct($objLibroExt, $paginaExt) {
        $this->objLibroInt = $objLibroExt;
        $this->paginaInt = $paginaExt;
    }

    public function getObjLibro()
    {
        return $this->objLibroInt;
    }

    public function getPaginaActual(){
        return $this->paginaInt;
    }

    public function setObjLibro($newObjLibro)
    {
        $this->objLibroInt = $newObjLibro;
    }

    public function setPaginaActual($newPagina)
    {
        $this->paginaInt = $newPagina;
    }

    public function siguientePagina()
    {
        return  $this->setPaginaActual($this->getPaginaActual()+1);
    }

    public function anteriorPagina(){
        return $this->setPaginaActual($this->getPaginaActual()-1);
    }

    public function irPagina($numPagina)
    {
        $this->setPaginaActual($numPagina);
        return $this->getPaginaActual();
    }

    public function __toString()
    {
        return "
datos del libro:
{$this->getObjLibro()}
estas en la pagina {$this->getPaginaActual()} ";
    }
}