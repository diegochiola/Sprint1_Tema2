<?php
//Charlie te mordio el dede
//defino variables
$probabilidad = (bool) true;
$numRand = rand(0,100);

function isBitten($numRand):bool{
    if ($numRand > 50 ){
        $probabilidad = true;
    }else{
        $probabilidad = false;
    }
    return $probabilidad;
}
//Prueba
if(isBitten($numRand)){
    $respuesta = "Charlie te mordio el dede";
}else{
    $respuesta = "Charlie no te mordio el dedo, has ganado!";
}

echo $respuesta;


?>