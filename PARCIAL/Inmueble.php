<?php

class inmueble {
    private $codigo;
    private $numeroPiso;
    private $tipoUso;
    private $costoMensual;
    private $objInquilino;

	public function __construct($codigo, $numeroPiso, $tipoUso, $costoMensual, $objInquilino) {

		$this->codigo = $codigo;
		$this->numeroPiso = $numeroPiso;
		$this->tipoUso = $tipoUso;
		$this->costoMensual = $costoMensual;
		$this->objInquilino = $objInquilino;
	}

	public function getCodigo() {
		return $this->codigo;
	}

	public function setCodigo($value) {
		$this->codigo = $value;
	}

	public function getNumeroPiso() {
		return $this->numeroPiso;
	}

	public function setNumeroPiso($value) {
		$this->numeroPiso = $value;
	}

	public function getTipoUso() {
		return $this->tipoUso;
	}

	public function setTipoUso($value) {
		$this->tipoUso = $value;
	}

	public function getCostoMensual() {
		return $this->costoMensual;
	}

	public function setCostoMensual($value) {
		$this->costoMensual = $value;
	}

	public function getObjInquilino() {
		return $this->objInquilino;
	}

	public function setObjInquilino($value) {
		$this->objInquilino = $value;
	}

    public function estaDisponible($tipoUso, $costoMaximo){
        $estaDisponible = false;
        if ($tipoUso == $this->getTipoUso() && $costoMaximo >= $this->getCostoMensual() && $this->getObjInquilino() == null ){
            $estaDisponible = true;
        }

        return $estaDisponible;
    }

    public function __toString()
    {
        return "
datos inmueble
codigo: {$this->getCodigo()}
numero de piso: {$this->getNumeroPiso()}
tipo uso: {$this->getTipoUso()}
costo mensual: {$this->getCostoMensual()}
Su inquilino es :
{$this->getObjInquilino()}
";

    }
}