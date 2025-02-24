<?php

/* 
 * VARIABLES LCCALES: Las variables locales son declaradas dentro de una funcion y no pueden ser llamadas desde fuera del codigo
 * amenos que se haga un RETURN
 * 
 * VARIABLES GLOBALES: son las que se declaran fuera de una funcion y estan disponibles dentro y fuera de la función
 */

$char = "Ni los genios son tan genios, ni los mediocres tan mediocres";

echo $char;

function holamundo(){
    global $char;
   echo "<h1>$char</h1>";
   
   $year= 2021;
   
   echo "<h1>$year</h1>";
   
   return $year;
}

echo holamundo();

function Dias(){
    echo "Buenos dias";
}
function Tardes(){
    echo "Buenas Tardes";
}
function Noches(){
    echo "Buenas noches";
}
$horario = "Noches";

echo $horario();