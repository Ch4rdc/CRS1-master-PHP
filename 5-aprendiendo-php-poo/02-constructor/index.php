<?php
require_once 'coche.php';

$coche = new coche("Amarrilo", "Renault", "Clio", 150, 200, 5);
$coche2 = new coche("rojo", "Ford", "Mustang", 200, 210, 6);
$coche3 = new coche("verde", "Honda", "civic", 160, 215, 3);

var_dump($coche,$coche2,$coche3);