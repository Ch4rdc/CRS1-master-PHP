<?php

/* 
EJERCICIO3: Programa que compruebe si una variable esta vacia y si esta vacia rellenarla con texto en minusculas    
 * y mostrarlo en mayuscula y negrita.
 */

$vacia = "";

if(empty($vacia)){
    $var = "Esto es una variable";
    $varmay = strtoupper($var); 
    echo "<b>$varmay<b>";
 
}else{
    echo"La variable esta llena";
}
