<?php
$marcas = ['YAMAHA','ITALIKA','HONDA','SUSUKI','KAWASAKI'];

sort($marcas); //Ordena alfabeticamente
var_dump($marcas);
echo "<br/>";

/*
arsor($marcas); //Ordena alfabeticamente de atras para delante
 */

$numeros=['1','2','3','7','8','10'];

sort($numeros);
var_dump($numeros);

/*añadir elementos*/
echo "<br/>";
$numeros[]= "100";
var_dump($numeros);
echo "<br/>";
array_push($numeros,'1999');
var_dump($numeros);

/*eliminar el ultimo elemento*/
echo "<br/>";
array_pop($numeros);
var_dump($numeros);
/*eliminar elementos el concreto en un array*/
echo "<br/>";
unset($numeros[2]);
var_dump($numeros);
/*aletorio dentro del array*/
 echo "<br/>";
$indice = array_rand($marcas);
var_dump($indice);
echo "<br/>";
echo $marcas[$indice];
/*array inverso*/
 echo "<br/>";
 var_dump(array_reverse($numeros));

 /*buscar dentro de un array*/
 echo "<br/>";
 $res = array_search('YAMAHA',$marcas);
 echo $marcas[$res];
 /*contar numero de elementos*/
 echo "<br/>";
 echo sizeof($marcas);