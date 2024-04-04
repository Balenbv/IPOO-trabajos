<?php
/*16
*/
class Libro
{
    private $isbn;
    private $titulo;
    private $anioEdicion;
    private $editorial;
    private $nombreAutor;
    private $apellidoAutor;

    public function __construct($isbnInput, $tituloInput, $anioEdicionInput, $editorialInput, $nombreAutorInput, $apellidoAutorInput)
    {
        $this->isbn = $isbnInput;
        $this->titulo = $tituloInput;
        $this->anioEdicion = $anioEdicionInput;
        $this->editorial = $editorialInput;
        $this->nombreAutor = $nombreAutorInput;
        $this->apellidoAutor = $apellidoAutorInput;
    }

    // Getter para ISBN
    public function getIsbn()
    {
        return $this->isbn;
    }

    // Setter para ISBN
    public function setIsbn($isbnInput)
    {
        $this->isbn = $isbnInput;
    }

    // Getter para título
    public function getTitulo()
    {
        return $this->titulo;
    }

    // Setter para título
    public function setTitulo($tituloInput)
    {
        $this->titulo = $tituloInput;
    }

    // Getter para año de edición
    public function getAnioEdicion()
    {
        return $this->anioEdicion;
    }

    // Setter para año de edición
    public function setAnioEdicion($anioEdicionInput)
    {
        $this->anioEdicion = $anioEdicionInput;
    }

    // Getter para editorial
    public function getEditorial()
    {
        return $this->editorial;
    }

    // Setter para editorial
    public function setEditorial($editorialInput)
    {
        $this->editorial = $editorialInput;
    }

    // Getter para nombre del autor
    public function getNombreAutor()
    {
        return $this->nombreAutor;
    }

    // Setter para nombre del autor
    public function setNombreAutor($nombreAutorInput)
    {
        $this->nombreAutor = $nombreAutorInput;
    }

    // Getter para apellido del autor
    public function getApellidoAutor()
    {
        return $this->apellidoAutor;
    }

    // Setter para apellido del autor
    public function setApellidoAutor($apellidoAutorInput)
    {
        $this->apellidoAutor = $apellidoAutorInput;
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
        $texto = "ISBN:" . $this->getIsbn() . "\n";
        $texto .= "titulo:" . $this->getTitulo() . "\n";
        $texto .= "año de edicion:" . $this->getAnioEdicion() . "\n";
        $texto .= "editorial:" . $this->getEditorial() . "\n";
        $texto .= "nombre de autor :" . $this->getNombreAutor() . "\n";
        $texto .= "apellido del autor:" . $this->getApellidoAutor() . "\n";
        return $texto;
    }
}

$testLibro = new Libro("123", "piter pan", "2000", "new york", "pablito", "perez");
echo $testLibro . "\n";

echo $testLibro->perteneceEditorial("new york") . "\n";
echo $testLibro->aniosdesdeEdicion() . "\n";

$parreglo = array("el rey leon", "la princecita", "madagascar", "puka");
echo $testLibro->iguales("el rey leon", $parreglo) . "\n";

$arreglo = array(
    ["libro" => "campanita", "editorial" => "ben 10"],
    ["libro" => "campanita", "editorial" => "ben 10"],
    ["libro" => "campanita", "editorial" => "ben 11"],
    ["libro" => "campanita", "editorial" => "ben 11"]
);
$array = $testLibro->librodeEditoriales($arreglo, "ben 10");
print_r($array);
