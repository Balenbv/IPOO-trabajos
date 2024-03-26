<?php

$arrayParaInspeccionar = [[1,2,3],[4,5,6],[7,8,9]];

// for ($i=0; $i< count($arrayParaInspeccionar);$i++){
//     foreach($arrayParaInspeccionar[$i] as $valorSolos){

//             echo "\n $valorSolos";
//     }
// }

foreach ($arrayParaInspeccionar as $arrayComun){
    foreach ($arrayComun as $valorUnico){
        echo "\n $valorUnico";
    }
}