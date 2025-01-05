<?php
// Ejercicio3 Escribir un programa que imprima por pantall los cuadrados  de los 40 numeros naturales

//PD:utilizar while


/*$con = 0;
while($con <= 40) {
    
    $resultado = $con * $con;
         echo "<h3> $resultado </h3>" ;  
         $con++;
} */

for($x=0; $x<=40; $x++){
    $res= $x*$x;
    echo "<h3>el cuadrado de $x es: $res</h3>";
}
