<?php
/*Escribe una función que determine la cantidad total a pagar por una llamada telefónica según las siguientes premisas:

Toda llamada que dure menos de 3 minutos tiene un coste de 10 céntimos.
Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5 céntimos.*/

$minutosLlamada= 0;
$costoLlamada= 0;

//funcion costoLlamada
function costoLlamada(int $minutosLlamada):float{
    //defino precios
    $costoMinimo= 0.10;
    $costoExtra = 0.05;
    if($minutosLlamada <= 3){
        $costoLlamada= $costoMinimo;
    }else{
        //$costoLlamada= 0.10 + (($mintusosLlamada - 3) * 0.05);
        $minutosExtra= $minutosLlamada - 3;
        $costoLlamada= $costoMinimo + ($minutosExtra * $costoExtra);
    }
    return $costoLlamada;
}
$minutosLlamada= 35; //minutos
echo "La llamada realizada cuesta: ". costoLlamada($minutosLlamada) . " euros.";

