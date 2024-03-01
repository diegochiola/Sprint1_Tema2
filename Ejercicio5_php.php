<?php
//Funcion Grado de estudiante
/*60% o más, el grado debería ser Primera División.
45% y el 59%, el grado debería ser Segunda División.
33% a 44%, el grado debería ser Tercera División.
nota es menor a 33%, el estudiante reprobará.
*/

//Definimos variable nota
$nota = 0;

function gradoEstudiante(int $nota): string {
    if ($nota >= 60){
        $respuesta = "Primera División";
    }else if($nota >= 45){
        $respuesta = "Segunda División";
    }else if($nota > 33){
        $respuesta = "Tercera División";
    }else{
        $respuesta = "Reprobado";
    }
    return $respuesta;
}

$nota = 65;
echo "En base a la nota del examen, el estudiante resulta ser: " . gradoEstudiante($nota);

?>