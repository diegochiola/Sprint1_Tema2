<?php
//Ejerccicio 4
//funcion contar
$numero = 0;
$cuantoEnCuanto = 0;

function contar(int $numero, int $cuantoEnCuanto = 2): int{ //se agrego el parametro por defecto
  for ($i=0; $i <= $numero ; $i += $cuantoEnCuanto) { 
    echo $i . "</br>";
  }
}
//llamado de funcion y prueba 
contar(20,);

?>