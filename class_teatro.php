<?php 
class teatro{
    private string $nombreTeatroInt;
    private string $direccionTeatroInt;
    private array $funcionesTeatroInt;

    public function __construct($nombreTeatroExt,$direccionTeatroExt,$funcionesTeatroExt){
        $this->nombreTeatroInt = $nombreTeatroExt;
        $this->direccionTeatroInt = $direccionTeatroExt;
        $this->funcionesTeatroInt = $funcionesTeatroExt;
    }

    public function getNombreTeatro(){
        return $this->nombreTeatroInt;
    }

    public function getDireccionTeatro(){
        return $this->direccionTeatroInt;
    }

    public function getFuncionEspecificaTeatro($posicion){
        return $this->funcionesTeatroInt[$posicion];
    }

    public function setFuncionEspecificaTeatro($posicion, $nuevoTitulo, $nuevoPrecio){
        $this->funcionesTeatroInt[$posicion]["nombre"] = $nuevoTitulo;
        $this->funcionesTeatroInt[$posicion]["precio"] = $nuevoPrecio;
    }

    public function setNombreTeatro($nuevoNombre){
        $this->nombreTeatroInt = $nuevoNombre;
    }
    
    public function setDireccionTeatro($nuevaDireccion){
        $this->direccionTeatroInt = $nuevaDireccion;
    }


    public function __toString()
    {
            return "";
    }

}
$arrayFunciones = [["nombre"=> "ranas magicas", "precio" => 40],["nombre"=> "palos malvados", "precio" => 10],["nombre"=> "revolucion hormiga", "precio" => 10],["nombre"=> "carceles embotelladas","precio" => 10]];

$obj = new teatro("magistral", "Ave. Buenos Aires", $arrayFunciones);
echo $obj;
