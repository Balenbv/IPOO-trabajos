<?php
class login{
    private string $nombreUsuarioInt;
    private string $passwordInt;
    private string $newPasswordInt;
    private string $frasePasswordInt;
    private string $newFrasePasswordInt;
    private array $historialPasswordsInt;

    function __construct($nombreUsuarioExt, $passwordExt,$frasePasswordExt,$newFrasePasswordExt,$historialPasswordsExt,$newPasswordExt )
    {
        $this->nombreUsuarioInt = $nombreUsuarioExt;
        $this->passwordInt = $passwordExt;
        $this->newPasswordInt = $newPasswordExt;
        $this->frasePasswordInt = $frasePasswordExt;
        $this->newFrasePasswordInt = $newFrasePasswordExt;
        $this->historialPasswordsInt = $historialPasswordsExt;
    }

    public function getNombreUsuario(){
        return $this->nombreUsuarioInt;
    }
    
    public function getPassword(){
        return $this->passwordInt;
    }

    public function getNewPassword(){
        return $this->newPasswordInt;
    }

    public function getFrasePassword(){
        return $this->frasePasswordInt;
    }

    public function getNewfrase(){
        return $this->newFrasePasswordInt;
    }

    public function setFrasePassword($newFrase){
        $this->frasePasswordInt = $newFrase;
    }

    public function getHistorialPassword(){
        return $this->historialPasswordsInt;
    }

    public function setPassword($passwordValida){
        $this->passwordInt = $passwordValida;
    }

    public function getUltimaPassword($posicion){
        return $this->historialPasswordsInt[$posicion];
    }

    public function moverPassword($ultimaPassword){
        $this->historialPasswordsInt[3] = $this->historialPasswordsInt[2];
        $this->historialPasswordsInt[2] = $this->historialPasswordsInt[1];
        $this->historialPasswordsInt[1] = $this->historialPasswordsInt[0];
        $this->historialPasswordsInt[0] = $ultimaPassword;
    }

    public function buscarPassword(){
        foreach ($this->getHistorialPassword() as $passwordComun){
            if($this->getNewPassword() == $passwordComun){
                return false;
            }
        }
        return true;
    }

    public function validarPassword(){
        if ($this->getPassword() == $this->getUltimaPassword(0)){
            $this->setPassword($this->getNewPassword());
            if($this->buscarPassword()!= false){
                $this->moverPassword($this->getNewPassword());
                $this->setFrasePassword($this->getNewfrase());
                return "la password '{$this->getNewPassword()}' reemplazo la anterior password exitosamente. \nsu nueva frase es: {$this->getFrasePassword()}";
            }
        return "'{$this->getNewPassword()}' es una password que ya existe.";
        } else {
        return "contra incorrecta";
        }
    }
}
$obj = new login("valentin", "pollo","don ", "la peor provincia",["pollo","casa","limon","oveja"],"asdasd");
echo $obj->validarPassword();
