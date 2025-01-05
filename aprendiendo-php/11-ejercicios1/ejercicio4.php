<?php

/*
 EJERCICIO4. Recoger dos numeros por la URL y hacer todas la operaciones basicas de una calculadora 
 */
//var_dump($_GET);
if(isset ($_GET['numero1']) && isset($_GET['numero2'])) {
$num1 = $_GET['numero1'];
$num2 = $_GET['numero2'];

echo "suma: " .($num1 * $num2)."<br>";
echo "resta: " .($num1 - $num2)."<br>";
echo "multiplicación: " .($num1 * $num2)."<br>";
echo "division: " . ($num1 / $num2)."<br>";
}else{
    echo "<h3> Introduce datos por la URL </h3>";
}



