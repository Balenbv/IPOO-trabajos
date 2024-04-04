<?php
/*16
*/
class Libro
{
    private $isbn;
    private $titulo;
    private $anioEdicion;
    private $editorial;
    private $objPersonaInt;
    private $cantPaginasInt;
    private $sinopsisInt;

    public function __construct($isbnInput, $tituloInput, $anioEdicionInput, $editorialInput, $objPersonaExt, $cantPaginasExt, $sinopsisExt)
    {
        $this->isbn = $isbnInput;
        $this->titulo = $tituloInput;
        $this->anioEdicion = $anioEdicionInput;
        $this->editorial = $editorialInput;
        $this->objPersonaInt = $objPersonaExt;
        $this->cantPaginasInt = $cantPaginasExt;
        $this->sinopsisInt = $sinopsisExt;

    }

    // Getter para ISBN
    public function getIsbn()
    {
        return $this->isbn;
    }

    // Getter para título
    public function getTitulo()
    {
        return $this->titulo;
    }


    // Getter para año de edición
    public function getAnioEdicion()
    {
        return $this->anioEdicion;
    }

    // Getter para editorial
    public function getEditorial()
    {
        return $this->editorial;
    }

    // Getter para nombre del autor
    public function getObjPersona()
    {
        return $this->objPersonaInt;
    }

    public function getCantidadPaginas()
    {
        return $this->cantPaginasInt;
    }

    public function getSinopsis()
    {
        return $this->sinopsisInt;
    }

    // Setter para ISBN
    public function setIsbn($isbnInput)
    {
        $this->isbn = $isbnInput;
    }

    // Setter para título
    public function setTitulo($tituloInput)
    {
        $this->titulo = $tituloInput;
    }

    // Setter para año de edición
    public function setAnioEdicion($anioEdicionInput)
    {
        $this->anioEdicion = $anioEdicionInput;
    }

    // Setter para editorial
    public function setEditorial($editorialInput)
    {
        $this->editorial = $editorialInput;
    }

    // Setter para nombre del autor
    public function setObjPersona($objPersonaExt)
    {
        $this->objPersonaInt = $objPersonaExt;
    }

    public function setCantidadPaginas($newCantidadPaginas)
    {
        $this->cantPaginasInt = $newCantidadPaginas;
    }

    public function setSinopsis($newSinopsis)
    {
        $this->sinopsisInt = $newSinopsis;
    }

    public function perteneceEditorial($editorial)
    {
        return ($this->getEditorial() == $editorial);
    }

    public function aniosdesdeEdicion()
    {
        return 2024 - $this->getAnioEdicion();
    }

    public function iguales($plibro, $parreglo)
    {

        $valor = false;
        foreach ($parreglo as $llave)
        {
            if ($llave === $plibro)
            {
                $valor = true;
            }
        }

    return $valor;
    }

    public function librodeEditoriales($arregloLibros, $peditorial)
    {

        $librosFiltrados = [];

        foreach ($arregloLibros as $libro) {
            if ($libro['editorial'] == $peditorial) {
                $librosFiltrados[] = $libro;
            }
        }
        return $librosFiltrados;
    }

    public function __toString()
    {
        return "
ISBN: {$this->getIsbn()}
titulo: {$this->getTitulo()}
año de edicion: {$this->getAnioEdicion()}
editorial: {$this->getEditorial()}
la cantidad de paginas son: {$this->getCantidadPaginas()}
la sinopsis es: {$this->getSinopsis()}
datos autor: {$this->getObjPersona()}
";
    }
}

