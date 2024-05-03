<?php
// public function mejorMostradorPara($tipoTramite) {
//         $coleccionMostradores = $this->getMostradores(); 
//         $pasa = false;
//         $bandera2 = null;
//         foreach($coleccionMostradores as $mostrador) {
//             if ($mostrador->getTipoTramite()  == $tipoTramite) {
//                 $cantidadPersonasEnFila = $mostrador->getClientesEnCola(); // 7  //  1
//                 $limitePersonasEnFila = $mostrador->getLimiteCola();       // 15   // 10
//                 if ($cantidadPersonasEnFila < $limitePersonasEnFila) {     // 7 < 15
//                     $pasa = true;                                      // true
//                     if ($pasa) {
//                         $limitePersonasEnFila = $cantidadPersonasEnFila;   //  7
//                         $bandera2 = $mostrador;                            // mostrador con 7
//                     }
//                 }
//             }
//         }
//         return $bandera2;
//     }