<?php

class inmueble {
    private $codigo;
	private $piso;
	private $tipo;
	private $costo;
	private $objInquilino;

	public function __construct($codigo, $piso, $tipo, $costo, $objInquilino)
	{
		$this->codigo = $codigo;
		$this->piso = $piso;
		$this->tipo = $tipo;
		$this->costo = $costo;
		$this->objInquilino = $objInquilino;
	}

	public function getCodigo()
	{
		return $this->codigo;
	}

	public function setCodigo($value)
	{
		$this->codigo = $value;
	}

	public function getPiso()
	{
		return $this->piso;
	}

	public function setPiso($value)
	{
		$this->piso = $value;
	}

	public function getTipo()
	{
		return $this->tipo;
	}

	public function setTipo($value)
	{
		$this->tipo = $value;
	}

	public function getCosto()
	{
		return $this->costo;
	}

	public function setCosto($value)
	{
		$this->costo = $value;
	}

	public function getInquilino()
	{
		return $this->objInquilino;
	}

	public function setInquilino($value)
	{
		$this->objInquilino = $value;
	}

	public function alquilar($inquilino)
	{
		if($this->getInquilino() == null)
		{
			$this->setInquilino($inquilino);
		}
		return $this->getInquilino() != null;
	}

	public function estaDispobible($tipo, $costo)
	{
		$dispobible = false;
		if($this->getInquilino() == null && $this->getTipo() == $tipo && $this->getCosto() <= $costo)
		{
			$dispobible = true;
		}
		return $dispobible;
	}

	public function __toString()
	{
		return "Inmueble:
Codigo: {$this->getCodigo()}
Piso: {$this->getPiso()}
Tipo: {$this->getTipo()}
Costo: {$this->getCosto()}
Inquilino: {$this->getInquilino()}
";
	}
}