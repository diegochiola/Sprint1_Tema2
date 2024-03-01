<?php
/*- Ejercicio 2
Imagina que estamos en una tienda donde se vende:

Chocolate: 1 euro
Chiclos: 0,50 euros
Caramelos: 1,50 euros
Implementa un programa que permita añadir cálculos a un total de compras de ese tipo. Por ejemplo, que si compramos:
2 chocolates, 1 de chicles y 1 de caramelos, tengamos un programa que permita ir añadiendo los subtotales a un total, tal que así:
función(2 chocolates) + función(1 de chicles) + función(1 de carmelos) = 2 + 0.5 + 1.5
Siendo, por tanto, el total, 4.*/



//Tienda 
function comprarChocolate(int $cantidadChocolate): float{
    //defino precios
    $precioChocolate = 1.0;
    $costo = $cantidadChocolate * $precioChocolate;
    return $costo;
}
function comprarChiclos(int $cantidadChiclos): float{
    //defino precios
    $precioChiclos= 0.50;
    $costo = $cantidadChiclos * $precioChiclos;
    return $costo;
}
function comprarCaramelos(int $cantidadCaramelos): float{
    //defino precios
    $precioCaramelos= 1.50;
    $costo = $cantidadCaramelos * $precioCaramelos;
    return $costo;
}

function totalPagar(float $costoChocolate, float $costoChiclos, float $costoCaramelos): float{
    $total= $costoChocolate + $costoChiclos + $costoCaramelos;
    return $total;
}

//implementacion:
$costoChocolate = comprarChocolate(5);
$costoChiclo = comprarChiclos(2);
$costoCaramelos = comprarCaramelos(3);

echo "El precio total de la compra es de: ".totalPagar($costoChocolate, $costoChiclo, $costoCaramelos) . " euros.";


