<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3B - Calculadora</title>
</head>
<body>
    
</body>
</html>


<?php
//Ejercicio 3B
//calculadora
//pedimos por pantalla numero 1 y numero 2
$numero1 = readline("Bienvenido ingrese el primer numero: ");
$numero2 = readline("Ingrese el segundo numero: ");

//pedimos al usuario la opcion de calculadora
$opcion = readline("Elija la operacion deseada : " . "</br>" .
                    "1. Suma" . "</br>".
                    "2. Resta" . "</br>".
                    "3. Multiplicacion ". "</br>".
                    "4. Division " . "</br>");
//switch con cada opcion
switch($opcion){
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
    echo $resultado;


?>