<?php
//operadores aritmeticos

$numero1 = 75;
$numero2 = 30;

echo 'suma ='. ($numero1 + $numero2) . '<br/>';

echo 'resta='.($numero1 - $numero2) . '<br/>';

echo 'multiplicacion='.($numero1 * $numero2) . '<br/>';

echo 'division = '. ($numero1  / $numero2) . '<br/>';

echo 'resto' . ($numero1 % $numero2) . '<br/>'; 

//operadores incremento y decremento

$year = 2019;
//incremento
$year++;
//decremento
$year--;
//predecremento
--$year;
//preincremento
++$year;
echo "<h1> $year </h1>";

//operadores de asignacion
$edad =10;
echo $edad. '<br>';

echo ($edad+=5);
echo ($edad-=5);
