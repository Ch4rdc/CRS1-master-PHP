<?php

/* 
EJERCICIO2. Escribir un programa con PHP que añada valores de un array mientras su longitud sea menor a 120 y 
 * y luego mostrarlo por pantalla.
 */


$coleccion = array();

for($i=0; $i<120; $i++){
    array_push($coleccion, $i);
}

var_dump($coleccion);
