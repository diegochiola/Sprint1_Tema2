<?php
//Variables
$x= 2;
$y= 5;
//no pude definir el tipo de variables por el error que tengo en php

$n = 2.5;
$m = 10.5;

//Ejercicio 3
//imprimir valor de cada variable
echo $x ."</br>" . $y ."</br>". $n ."</br>".$m . "<br></br>";
//suma de todas las variables almacenada en una nueva variable
$suma = $x + $y;
echo "La suma de $x + $y es: " . $suma . "</br>";;
$resta = $x - $y;
echo "La resta de $x - $y es: " . $resta . "</br>";
$multiplicacion = $x * $y;
echo "La multiplicacion de $x  por $y es: " . $multiplicacion. "</br>";
$modulo = $x % $y;
echo "El modulo de $x entre $y es: " . $modulo. "<br> </br>";

//operaciones con las variables doubles
$sumaDouble = $n + $m;
echo "La suma de $n + $m es: " . $sumaDouble . "</br>";;
$restaDouble = $n - $m;
echo "La resta de $n entre $m es: " . $restaDouble . "</br>";
$multiplicacionDouble = $n * $m;
echo "La multiplicacion de $n  por $m es: " . $multiplicacionDouble. "</br>";
$moduloDouble = $n % $m;
echo "El modulo de $n entre $m es: " . $moduloDouble. "<br> </br>";

//De todas las variables
//doble de cada variable
echo "El doble de $x es: " . ($x * 2) ."</br> ". 
"El doble de $y es: " . ($y * 2) . "</br>" .
"El doble de $n es: " . ($n * 2) . "</br>" .
"El doble de $m es: " . ($m * 2) . "</br>";
//suma de todas las variables
$sumaVariables = $x + $y + $n + $m;
echo "La suma de $x + $y + $n + $m = " . $sumaVariables . "</br>";
//producto de todas las variables
$multiplicacionVariables = $x * $y * $n *$m;
echo "La multriplicacion de todas las variables entre si es de: " . $multiplicacionVariables . "<br> </br>";

//Ejercicio 3B
calculadora(2,5,1);

//calculadora
function calculadora(int $numero1, int $numero2, int $operacion): int{
    switch($operacion){
        case 1: //Suma
            $resultado = $numero1 + $numero2;
            break;
        case 2: //Resta
            $resultado = $numero1 - $numero2;
            break;
        case 3: //multiplicacion
            $resultado = $numero1 * $numero2;
            break;
        case 4: //division
            $resultado= $numero1 / $numero2;
            break;
        default:
            echo "Opcion incorrecta, vuelva a ingresar una opcion.";               
            
        }
    return $resultado;    
}
echo "La operacion seleccionada da como resultado: ". calculadora(2,5,1);

?>