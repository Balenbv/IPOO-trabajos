<?php

//     class calculadora{

//         private float $numero1;
//         private float $numero2;
        

//         public function __construct($primerNumero, $segundoNumero)
//         {
//             $this->numero1 = $primerNumero;
//             $this->numero2 = $segundoNumero;
//         }

//         public function getNumero1(){
//             return $this->numero1;
//         }
//         public function getNumero2(){
//             return $this->numero2;
//         }

//         public function setNumero1($nuevoPrimerNumero){
//             $this->numero1 = $nuevoPrimerNumero;
//         }

//         public function setNumero2($nuevoSegundoNumero){
//             $this->numero2 = $nuevoSegundoNumero;
//         }

//         public function suma (){
//             return $this->getNumero1() + $this->getNumero2();
//         }

//         public function resta(){
//             return $this->getNumero1() - $this->getNumero2();
//         }

//         public function multiplicacion(){

//             return $this->getNumero1() * $this->getNumero2();
//         }

//         public function division(){
//             return $this->getNumero1() / $this->getNumero2();
//         }

//     public function __toString()
//     {
//        return "
//     la suma de {$this->getNumero1()} + {$this->getNumero2()} es: {$this->suma()}
//     la resta de {$this->getNumero1()} - {$this->getNumero2()} es: {$this->resta()}
//     la multiplicacion de {$this->getNumero1()} * {$this->getNumero2()} es: {$this->multiplicacion()}
//     la division de {$this->getNumero1()} / {$this->getNumero2()} es: {$this->division()}";
//     }
// }

// echo "ingrese 2 numeros: \n";
// $n1 = trim(fgets(STDIN));
// $n2 = trim(fgets(STDIN));

// $obj = new calculadora($n1 , $n2);
// echo $obj;


// class reloj{
//    private int $horaInt;
//    private int $minInt;
//    private int $segInt;
//    private string $totalHora;
//    private string $totalMins;
//    private string $totalSegs;

//         public function __construct($horaExt, $minExt, $segExt)
//         {
//             $this->horaInt = $horaExt;
//             $this->minInt = $minExt;
//             $this->segInt = $segExt;
//         }
        
//         public function getHoraInt(){
//             return $this->horaInt;
//         }

//         public function getMinInt(){
//             return $this->minInt;
//         }

//         public function getSegInt(){
//             return $this->segInt;
//         }

//         public function getTotalHora(){
//             return $this->totalHora;
//         }

//         public function getTotalMins(){
//             return $this->totalMins;
//         }

//         public function getTotalSegs(){
//             return $this->totalSegs;
//         }

//         public function setSegInt($num){
//             $this->segInt = $num;
//         }

//         public function

//         public function sumaSeg(){
           
//             $segundo = $this->getHoraInt();
//             if ($segundo > 59){
//                 $this->segInt = 0;
//                 $this->minInt++;
//             }
                
//             return $this->segInt;
//         }

//         public function sumaMin(){
//             $this->minInt+= 1;
//             if ($this->minInt > 59){
//                 $this->minInt = 0;
//                 $this->horaInt++;
//             }
//             return $this->minInt;
//         }

//         public function sumaHora(){
//             $this->horaInt += 1;
//             if ($this->horaInt > 23){
//                 $this->horaInt = 0;
//             }
//             return $this->horaInt;
//         }



//         public function __toString()
//         {
//             $this->totalSegs = $this->sumaSeg();
//             $this->totalMins = $this->sumaMin();
//             $this->totalHora = $this->sumaHora();
//            return "el horario total es {$this->totalHora}:{$this->totalMins}:{$this->totalSegs}";
//         }

// }

// $obj = new reloj(6,23,4);

// echo $obj;


class fecha {
    public int $cantDiasMes;
    public int $diaInt;
    public int $mesInt;
    public int $anioInt;
    public int $incremento;
    public string $mesText;

    public function __construct($dia,$mes,$anio,$incrementoExt)
    {
        $this->diaInt = $dia;
        $this->mesInt = $mes;
        $this->anioInt = $anio;
        $this->incremento = $incrementoExt;
    }
    public function incrementa_un_dia(){
        if ($this->fecha_valida()){
            for ($i=0;$i<$this->incremento;$i++){
                $this->diaInt++;
                if ($this->diaInt > $this->dias_meses()){
                    $this->diaInt=1;
                    $this->mesInt++;
                    if ($this->mesInt > 12){
                        $this->anioInt++;
                        $this->mesInt=1;
                        $this->diaInt=1;
                    }

                }
            }
            $this->definir_mes();
            return "{$this->diaInt}/{$this->mesInt}/{$this->anioInt} \n{$this->diaInt} de {$this->mesText} de {$this->anioInt}";
        } else {
            return "fecha invalida";
        }

    }
    public function es_bisiesto(){
        return ( $this->anioInt % 4 == 0 && ($this->anioInt % 100 != 0 || $this->anioInt % 400 == 0));
    }

    public function definir_mes(){
        $meses = ["enero", "febrero","marzo","abril","mayo","junio", "julio","agosto","septiembre","octubre","noviembre","diciembre"];
        if ($this->mesInt > 0 && $this->mesInt <= 12){
            return $this->mesText = $meses[$this->mesInt - 1];
        } else {
            return false;
        }
    }

    public function dias_meses(){
        $diasMes =[31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        if ($this->es_bisiesto()){
            $diasMes[1] = 29;
        }
        if ($this->mesInt > 0 && $this->mesInt < 13){
            return $diasMes[$this->mesInt - 1];
        } else {
            return "los dias del mes no son validos";
        }
    }

    public function fecha_valida(){
        if ($this->definir_mes() != false && $this->diaInt > 0 && $this->diaInt <= $this->dias_meses() && $this->anioInt >= 0){
            return true;
        } else {
            return false;
        }
    }

    public function __toString()
    {
        return "{$this->incrementa_un_dia()}";
    }

}

$obj = new fecha(9, 12, 2018,420);

echo $obj;

// class Login {
//     public string $nombreUsuarioClass;
//     public string $passwordClass;
//     public string $fraseClaveClass;
//     public array $registroNombresUsuarios;
//     public array $registroPasswordsUsuarios;
//     public array $registroPrivadoPasswordsUsuario;
    
//     public function __construct($nombreUsuario, $password)
//     {
//         $this->nombreUsuarioClass = $nombreUsuario;
//         $this->passwordClass = $password;
//     }

//     public function usuario_nuevo(){
//         $registroNombresUsuarios = ["diego","valentin","pablo"];
//         foreach ($registroNombresUsuarios as $nombre){
//             if ($nombre == $this->nombreUsuarioClass){
//                 return false;
//             }
//         }
        
//         array_push($registroNombresUsuarios, $this->nombreUsuarioClass);

//         return true;
//     }

//     public function new_password(){
//         if ($this->usuario_nuevo()){
//             echo "ingrese el password que desea:\n";

//             array_push($registroPrivadoPasswordsUsuario, $this->passwordClass);
//         } else {
//             echo "ingrese su nuevo password";
//         }
//     }

// }

// echo "ingrese su nombre\n";
// $nombreUsuario = trim(fgets(STDIN));
// echo "ingrese su password";
// $password = trim(fgets(STDIN));
// $obj = new login ($nombreUsuario, $password);

// $obj->new_password();