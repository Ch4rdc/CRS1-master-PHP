<?php

/* 
EJERCICIO4. Crear un script en php que tenga 4 variables, una de tipo array, string, otra de tipo int, y boleana al igual 
 * que imprima el tipo de dato que es.
 */

$array = array();
$int = 1;
$bolean = true;
$string= "This is a text";

if(is_array($array)){
    echo "<h3>es un array";
}
if(is_integer($int)){
    echo "<h3>es un entero";
}
if(is_string($string)){
    echo "<h3>Es un string<h3>";
}
if(is_bool($bolean)){
    echo "<h3>Es un boleano";
}
