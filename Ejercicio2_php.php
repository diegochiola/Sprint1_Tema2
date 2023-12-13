<?php
//Variables
$saludo = (string) "Hello, World!";
$curso = (string) "Aquest és el curs de PHP";

//echo $saludo . "</br>";
$saludoMayusculas = strtoupper($saludo); //pasa todos los caracteres a mayusculas
//echo strtolower($saludo);
//echo $saludoMayusculas . "</br>";
//echo ("La cantidad de caracteres son: " . strlen($saludo) . "</br>"); //cuenta los caracteres
//echo (strrev($saludo) . "</br>"); //reverse 

echo $saludo . "</br>" . $saludoMayusculas . "</br>" . "La cantidad de caracteres son: " . strlen($saludo) . "</br>" .
strrev($saludo) . "</br>";

?>