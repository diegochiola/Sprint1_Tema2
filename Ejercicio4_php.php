<?php
//Ejerccicio 4
//funcion contar
$numero = (int) 0;
$cuantoEnCuanto = (int) 0;



function contar(int $numero, int $cuantoEnCuanto): int{
  for ($i=0; $i <= $numero ; $i += $cuantoEnCuanto) { 
    echo $i . "</br>";
  }
}

contar(20, 5);


?>