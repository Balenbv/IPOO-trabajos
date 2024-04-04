<?php

class Libro{
    private $ISBN; #<-- sistema internacional de enumeración e identificación de títulos de determinada editorial.
    private $titulo;
    private $anio_de_edicion;
    private $editorial;
    private $nombreApellido_autor;
    private $cantPaginas;
    private $sinopsis;
    
    #a)
    public function __construct($ISBN,$title,$yearEdit, $edition, $nameLastname_author,$numPages, $synopsis)
    {
        $this->ISBN = $ISBN;
        $this->titulo = $title;
        $this->anio_de_edicion = $yearEdit;
        $this->editorial = $edition;
        $this->nombreApellido_autor = $nameLastname_author;
        $this->cantPaginas = $numPages;
        $this->sinopsis = $synopsis;
    }

    #b)
    public function getISBN(){
        return $this->ISBN;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getanioEdicion(){
        return $this->anio_de_edicion;
    }
    public function getEditorial(){
        return $this->editorial;
    }
    public function getNombreApellido(){
        return $this->nombreApellido_autor;
    }
    public function getCantPaginas(){
        return $this->cantPaginas;
    }
    public function getSinopsis(){
        return $this->sinopsis;
    }
    
    
    public function setISBN($newISBN){
        $this->ISBN = $newISBN;
    }
    public function setTitulo($newTitulo){
        $this->titulo = $newTitulo;
    }
    public function setanioEdicion($newAnioEdicion){
        $this->anio_de_edicion = $newAnioEdicion;
    }
    public function setEditorial($newEditorial){
        $this->editorial = $newEditorial;
    }
    public function setNombreApellido($newNomYape){
        $this->nombreApellido_autor = $newNomYape;
    }
    public function setCantPaginas($newCantPaginas){
        $this->cantPaginas = $newCantPaginas;
    }
    public function setSinopsis($newSinopsis){
        $this->sinopsis = $newSinopsis;
    }

    public function perteneceEditorial($peditorial){#indica si el libro pertenece a una editorial dada.
        #Recibe por parámetro una editorial y devuelve un valor verdadero/falso;
        
        $bandera = ($this->getEditorial() == $peditorial ? true : false);
        return $bandera;
    }
    public function aniosDesdeEdicion(){#<-- retorna los años pasados desde que el libro fue editado
        $resultado = 2024 - $this->getanioEdicion();
        return $resultado;
    }


    public function iguales($plibro, $parreglo){
        
        $bandera = true;
        $contador = 0;
        
        while($bandera && $contador < count($parreglo)){
            if($plibro->getISBN() == $parreglo[$contador]->getISBN() &&
            $plibro->getTitulo() == $parreglo[$contador]->getTitulo() &&
            $plibro->getanioEdicion() == $parreglo[$contador]->getanioEdicion() &&
            $plibro->getEditorial() == $parreglo[$contador]->getEditorial() &&
            $plibro->getNombreApellido() == $parreglo[$contador]->getNombreApellido()){
            $bandera = false;
            
            }
            $contador++;
        }
        
        return $bandera;
    }

    public function librodeEditoriales($arreglolibros,$peditorial){
        $librosDeEditorial = [];
        foreach($arreglolibros as $editorial){
            if($peditorial == $editorial->getEditorial()){
                $libroEdit = ["ID del libro" => $editorial->getISBN(), 
                "titulo" => $editorial->getTitulo(), "año de edicion" => $editorial->getanioEdicion(),
                "editorial" => $editorial->getEditorial(), "nombre y apellido de autor" => $editorial->getNombreApellido()];
                array_push($librosDeEditorial,$libroEdit);
            }
        }
        return $librosDeEditorial;
    }

    public function __toString()
    {
        return "identificador único: ". $this->getISBN()."\n ".
        "titulo: ".$this->getTitulo()."\naño de Edición: ".$this->getanioEdicion()."\n".
        "editorial: ".$this->getEditorial()."\nnombre y apellido del autor: ".$this->getNombreApellido()."\n".
        "cantidad de páginas: ".$this->getCantPaginas()."\n"."Sinopsis: ".$this->getSinopsis();
    }
}

$obj = new Libro(123,"valen y su esbirros", 1840, "deluxe", "bustos villar", 40, "la increible historia de como valen carreo 2 chicos que no sabian multiplicar por 2 cifras");
$obj1 = new Libro(123,"valen y su esbirros", 140, "deluxe", "bustos villar", 40, "la increible historia de como valen carreo 2 chicos que no sabian multiplicar por 2 cifras");
$obj2 = new Libro(123,"valen y su esbirros", 1840, "deluxe", "busto villar", 40, "la increible historia de como valen carreo 2 chicos que no sabian multiplicar por 2 cifras");
$obj3 = new Libro(123,"valen y su esbirros", 1840, "deluxe", "bustos villar", 40, "la increible historia de como valen carreo 2 chicos que no sabian multiplicar por 2 cifras");
$arregoL = [$obj,$obj1,$obj2,$obj3];
echo $obj->librodeEditoriales($arregoL, "deluxe");