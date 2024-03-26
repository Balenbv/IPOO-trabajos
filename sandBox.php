<?php


class Responsable{
    private string $nombre;
    private string $apellido;
    private int $dni;
    private string $direccion;
    private string $mail;
    private int $telefono;

    public function __construct($nombreImput,$apellidoInput,$dniInput,$direccionInput,$mailInput,$telefonoInput) {
        $this->nombre = $nombreImput;
        $this->apellido = $apellidoInput;
        $this->dni = $dniInput;
        $this->direccion = $direccionInput;
        $this->mail= $mailInput ;
        $this->telefono = $telefonoInput;

    }

    //getter
    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getDni(){
        return $this->dni;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function getMail(){
        return $this->mail;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    // Setters
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function setDni($dni){
        $this->dni = $dni;
    }

    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    public function setMail($mail){
        $this->mail = $mail;
    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    public function __toString(){
        $nombre = $this->getNombre();
        $apellido = $this->getApellido();
        $dni = $this->getDni();
        $direccion = $this->getDireccion();
        $mail = $this->getMail();
        $telefono = $this->getTelefono();
        
        $texto = "nombre : $nombre";
        $texto .= "apellido: $apellido";
        $texto .=  "dni : $dni";
        $texto .= "direccion $direccion";
        $texto .= "mail : $mail";
        $texto .= "telefono :$telefono";
        return $texto;
    }
}

//$obj = new Responsable ("barquito","colo",10000,"los barcos al 2000","barquito@gmail.com",258963147);
//echo $obj;


class Viaje {
    private string $destino; 
    private $horaDePartida; 
    private $horaLlegada; 
    private $numero; 
    private $importe; 
    private $fecha; 
    private $cantidadDeAsiestosTotales; 
    private $cantidadDeAsientosDisponibles; 
    private $referenciaPersonaResponsable; 

    public function __construct($destinoInput, $horaDePartidaInput, $horaLlegadaInput, $numeroInput, $importeInput, $fechaInput, $cantidadDeAsiestosTotalesInput, $cantidadDeAsientosDisponiblesInput, $referenciaPersonaResponsableInput) {
        $this->destino = $destinoInput;
        $this->horaDePartida = $horaDePartidaInput;
        $this->horaLlegada = $horaLlegadaInput;
        $this->numero = $numeroInput;
        $this->importe = $importeInput;
        $this->fecha = $fechaInput;
        $this->cantidadDeAsiestosTotales = $cantidadDeAsiestosTotalesInput;
        $this->cantidadDeAsientosDisponibles = $cantidadDeAsientosDisponiblesInput;
        $this->referenciaPersonaResponsable = $referenciaPersonaResponsableInput;
    }
    // Getters
    public function getDestino() {
        return $this->destino;
    }

    public function getHoraDePartida() {
        return $this->horaDePartida;
    }

    public function getHoraLlegada() {
        return $this->horaLlegada;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getImporte() {
        return $this->importe;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getCantidadDeAsiestosTotales() {
        return $this->cantidadDeAsiestosTotales;
    }

    public function getCantidadDeAsientosDisponibles() {
        return $this->cantidadDeAsientosDisponibles;
    }

    public function getReferenciaPersonaResponsable() {
        return $this->referenciaPersonaResponsable;
    }

    // Setters
    public function setDestino($destino) {
        $this->destino = $destino;
    }

    public function setHoraDePartida($horaDePartida) {
        $this->horaDePartida = $horaDePartida;
    }

    public function setHoraLlegada($horaLlegada) {
        $this->horaLlegada = $horaLlegada;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function setImporte($importe) {
        $this->importe = $importe;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function setCantidadDeAsiestosTotales($cantidadDeAsiestosTotales) {
        $this->cantidadDeAsiestosTotales = $cantidadDeAsiestosTotales;
    }

    public function setCantidadDeAsientosDisponibles($cantidadDeAsientosDisponibles) {
        $this->cantidadDeAsientosDisponibles = $cantidadDeAsientosDisponibles;
    }

    public function setReferenciaPersonaResponsable($referenciaPersonaResponsable) {
        $this->referenciaPersonaResponsable = $referenciaPersonaResponsable;
    }

    public function __toString(){
    $string = "Destino: " . $this->getDestino() . "\n";
    $string .= "Hora de partida: " . $this->getHoraDePartida() . "\n";
    $string .= "Hora de llegada: " . $this->getHoraLlegada() . "\n";
    $string .= "Número: " . $this->getNumero() . "\n";
    $string .= "Importe: " . $this->getImporte() . "\n";
    $string .= "Fecha: " . $this->getFecha() . "\n";
    $string .= "Cantidad de asientos totales: " . $this->getCantidadDeAsiestosTotales() . "\n";
    $string .= "Cantidad de asientos disponibles: " . $this->getCantidadDeAsientosDisponibles() . "\n";
    $string .= "Referencia de la persona responsable: " . $this->getReferenciaPersonaResponsable() . "\n";
    return $string;
    }

    public function asignarAsientosDisponibles($cantAsientos){
        if($cantAsientos > $this->getCantidadDeAsientosDisponibles()){
            $asientos = false; 
        }else{
            $asientos = true;
        }
        return $asientos;
    }
}


$obj1 = new Viaje(
    "Plazas doradas",
    10,
    1,
    123456789,
    3000,
    "21/03/2021",
    200,
    50,
    "barquito"
);

//echo $obj1;
/*
//comprueba si hay asientos disponibles
if($obj1->asignarAsientosDisponibles(50)){
    echo "hay asientos disponibles";
}else{
    echo "no hay asientos disponibles";
}
*/

class Empresa {
    private $indetificacion;
    private $nombre;
    private $coleccionViajes;

    public function __construct($indetificacionImput,$nombreImput,$coleccionViajesInput) {
        $this->indetificacion = $indetificacionImput;
        $this->nombre = $nombreImput;
        $this->coleccionViajes = $coleccionViajesInput;
    }

    // Métodos de acceso (Getters)
    public function getIndetificacion() {
        return $this->indetificacion;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getColeccionViajes() {
        return $this->coleccionViajes;
    }

    // Métodos de acceso (Setters)
    public function setIndetificacion($indetificacion) {
        $this->indetificacion = $indetificacion;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setColeccionViajes($coleccionViajes) {
        $this->coleccionViajes[$coleccionViajes];
    }
    public function __toString(){
        $texto = "nombre :". $this->getNombre()."\n";
        $texto .= "identificacion :". $this->getIndetificacion()."\n";
        $texto .= "coleccion de viajes : " . print_r($this->getColeccionViajes())."\n";
        return $texto;
    }
    public function darViajeDestino($elDestino,$cantAsientos){
        $coleccionNueva = [];
        $i = 0;
        $vueloNecesitado = [$elDestino, $cantAsientos];

        foreach($this->getColeccionViajes() as $viaje){

            //$viaje = ["destino" => $viaje, $cantAsientos]

                if($viaje["destino"] === $vueloNecesitado[$elDestino]){
                    if($viaje[1] <= $cantAsientos){
                        $i++;
                        $coleccionNueva[$i] = [$viaje];
                        print_r($coleccionNueva);
                    }
                }
        }
        
        return $coleccionNueva;
    }
}
$viajes = [ ["destino" => "cordoba", 50],
            ["destino" => "cordoba", 50],
            ["destino" => "cordoba", 50],
            ["destino" => "cordoba", 50],
            ["destino" => "cordoba", 50],
            ["destino" => "cordoba", 50]
];

$obj2 = new Empresa("identificacion","nombre",$viajes);
echo $obj2;
print_r($obj2->darViajeDestino("mar del plata",20000));