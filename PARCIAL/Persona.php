<?php

class Persona {
    private $tipoDocumento;
    private $numeroDocumento;
    private $nombre;
    private $apellido;
    private $telefono;

	public function __construct($tipoDocumento, $numeroDocumento, $nombre, $apellido, $telefono) {

		$this->tipoDocumento = $tipoDocumento;
		$this->numeroDocumento = $numeroDocumento;
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->telefono = $telefono;
	}

	public function getTipoDocumento() {
		return $this->tipoDocumento;
	}

	public function setTipoDocumento($value) {
		$this->tipoDocumento = $value;
	}

	public function getNumeroDocumento() {
		return $this->numeroDocumento;
	}

	public function setNumeroDocumento($value) {
		$this->numeroDocumento = $value;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function setNombre($value) {
		$this->nombre = $value;
	}

	public function getApellido() {
		return $this->apellido;
	}

	public function setApellido($value) {
		$this->apellido = $value;
	}

	public function getTelefono() {
		return $this->telefono;
	}

	public function setTelefono($value) {
		$this->telefono = $value;
	}

    public function __toString()
    {
        return "
tipo documento: {$this->getTipoDocumento()}
numero de documento: {$this->getNumeroDocumento()}
nombre: {$this->getNombre()}
apellido: {$this->getApellido()}
telefono: {$this->getTelefono()}
    ";
    }
}