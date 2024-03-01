<?php
//Charlie te mordio el dede
//defino variables
//$probabilidad = (bool) false;

function isBitten():bool{
    $numRand = rand(0,100);
    if ($numRand > 50 ){
        $probabilidad = true;
    }else{
        $probabilidad = false;
    }
    return $probabilidad;
}

//Prueba
if(isBitten()){
    $respuesta = "Charlie te mordio el dedo!";
}else{
    $respuesta = "Charlie no te mordio el dedo, has ganado!";
}
echo $respuesta;
?>