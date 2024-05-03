<?php
class Lectura{
    private $objLibroInt;
    private $paginaInt;
    private $librosLeidosInt;

    public function __construct($objLibroExt, $paginaExt, $librosLeidosExt) {
        $this->objLibroInt = $objLibroExt;
        $this->paginaInt = $paginaExt;
        $this->librosLeidosInt = $librosLeidosExt;
    }

    public function getObjLibro()
    {
        return $this->objLibroInt;
    }

    public function getPaginaActual(){
        return $this->paginaInt;
    }

    public function getColeccionLibros()
    {
        return $this->librosLeidosInt;
    }

    public function setObjLibro($newObjLibro)
    {
        $this->objLibroInt = $newObjLibro;
    }

    public function setPaginaActual($newPagina)
    {
        $this->paginaInt = $newPagina;
    }

    public function setColeccionLibros($newColeccion)
    {
        $this->librosLeidosInt = $newColeccion;
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

    public function libroLeido($tituloDelLibro)
    {
        $estaLeido = 'no se encontro';

       for($i=0; $estaLeido != 'se encontro' && $i < count($this->getColeccionLibros());$i++){

        if ($this->getColeccionLibros()[$i]->getTitulo() == $tituloDelLibro){
            $estaLeido = 'se encontro';
        }
       }
    return $estaLeido;
    }

    public function darSinopsis($titulo){
        $sinopsis = 'no se encontro la sinopsis del titulo';

        for ($i=0;$sinopsis != 'no se encontro la sinopsis del titulo' &&  $i < count($this->getColeccionLibros());$i++){

            if ($this->getColeccionLibros()[$i]->getTitulo() == $titulo){
                $sinopsis = $this->getColeccionLibros()[$i]->getSinopsis();
            }
        }

        return $sinopsis;
    }

    public function leidosAnioEdicion($num)
    {
    $coleccionLibrosEditAnio = [];
        foreach($this->getColeccionLibros() as $objetolibro){
            if ($num ==$objetolibro->getAnioEdicion()){
                array_push($coleccionLibrosEditAnio, $objetolibro->getTitulo());
            }
        }
        return print_r($coleccionLibrosEditAnio);
    }

    public function darLibrosPorAutor($autor)
    {
        $coleccionLibrosAutores =[];
        foreach($this->getColeccionLibros() as $objetolibro){
            if ($autor ==$objetolibro->getObjPersona()->getNombre()){
                array_push($coleccionLibrosAutores, $objetolibro->getTitulo());
            }
        }
        return print_r($coleccionLibrosAutores);
    }

    public function __toString()
    {
        return "
datos del libro:
{$this->getObjLibro()}
estas en la pagina {$this->getPaginaActual()} ";
    }
}