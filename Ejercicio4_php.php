<?php
//Ejerccicio 4
//funcion contar
$numero = 0;
$cuantoEnCuanto = 0;

function contar(int $numero = 10, int $cuantoEnCuanto = 1): int{ //se agrego el parametro por defecto
  $contador = 0;
  for ($i=0; $i <= $numero ; $i += $cuantoEnCuanto) { 
    echo $i . "\n";
  }
  return $contador;
}
//llamado de funcion y prueba 
contar();
contar(20,2);

?>