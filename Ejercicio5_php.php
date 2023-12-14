<?php
//Funcion Grado de estudiante
/*60% o más, el grado debería ser Primera División.
45% y el 59%, el grado debería ser Segunda División.
33% a 44%, el grado debería ser Tercera División.
nota es menor a 33%, el estudiante reprobará.
*/

//Definimos variable nota
$nota = (int) 0;

function gradoEstudiante(int $nota): string {
    if ($nota >= 60){
        $respuesta = "Primera División";
    }else if($nota>= 45 && $nota <= 59){
        $respuesta = "Segunda División";
    }else if($nota > 33 && $nota <= 44){
        $respuesta = "Tercera División";
    }else{
        $respuesta = "Reprobado";
    }
    return $respuesta;
}

echo "En base a las notas, el estudiante resulta ser: " . gradoEstudiante($nota);

?>