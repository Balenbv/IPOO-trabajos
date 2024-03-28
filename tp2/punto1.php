<?php
class Persona {
    private string $nombre;
    private string $apellido;
    private string $tipo; 
    private string $numeroDocumento;

    public function __construct($nombreExt,$apellidoExt,$tipoExt,$numeroDocumentoExt){
        $this->nombre = $nombreExt ; 
        $this->apellido = $apellidoExt;
        $this->tipo = $tipoExt;
        $this->numeroDocumento = $numeroDocumentoExt;
    }

    public function getNombre()
  {
    return $this->nombre;
  }

  public function getApellido()
  {
    return $this->apellido;
  }
  
  public function getTipo()
  {
    return $this->tipo;
  }

  public function getNumeroDocumento()
  {
    return $this->numeroDocumento;
  }

  public function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }

  public function setApellido($apellido)
  {
    $this->apellido = $apellido;
  }

  public function setTipo($tipo)
  {
    $this->tipo = $tipo;
  }

  public function setNumeroDocumento($numeroDocumento)
  {
    $this->numeroDocumento = $numeroDocumento;
  }
  public function __toString(){
    $respuesta = "nombre: {$this->getnombre()}\n";
    $respuesta .= "apellido: {$this->getApellido()}\n";
    $respuesta .= "tipo: {$this->getTipo()}\n";
    $respuesta .= "numero de documento: {$this->getNumeroDocumento()}\n";
    return $respuesta;

  }
}


