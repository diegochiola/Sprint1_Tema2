<?php
//definir variables integer, double, string y boolean. Imprimirlas por pantalla.

//Variables
//$nombre = "Diega";
define("nombre" , "Diega"); //defino variable constante
$edad = 31; //intente definri el tipo de variables y me da error (int, string, boolean)
$estatura = 1.75;
$colorCabello = true;
//no pude agregar el tipo de variables por error en php

echo "Mi nombre es " . nombre .", tengo ". $edad . " años.</br>" . 
"Mi estatura es " . $estatura . " metros y mi color de pelo es rubio: " . $colorCabello . "."; 

?>