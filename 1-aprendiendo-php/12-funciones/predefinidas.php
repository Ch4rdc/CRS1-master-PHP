<?php

//debuggear
$nombre = "José Carlos";
var_dump($nombre);
//Fechas
echo date('d-m-y');
echo "<br>";
echo time(); //LA HORA EN TIEMPO
//funciones matematicas
echo "<br/>";
echo "El cuadrado de un numero: ".sqrt(10);
echo "<br/>";
echo "Un numero aletorio de 100 a 200 es:" .rand(100,200);
echo "<br/>";
echo "PI es: " .pi();
echo "<br/>";
echo gettype($nombre);
echo "<br/>";

if(is_string($nombre)){
    echo "this var is a string";
}
echo "<br/>";
if(!is_float($nombre)){
    echo "this is´t a float number";
}

if(isset($edad)){
    echo "La varible existe";
}else{
    echo "La variable no existe";
}
echo "<br/>";

echo $hola="    hola    ";

 var_dump($hola); // trim($VAr) ***srive para limpiar las variables;
 
 //eliminar una variable del programa 
 
 $year=2019;
 unset($year);
 //var_dump($year); //No existe la variable
 echo "<br/>";
 if(empty($texto)){
     echo "La variable esta vacia";
 }else{
     echo "La variable esta llena";
 }
 //contar cadenas de un string 
 
 $contar="hola";
 echo "<br/>";
 echo strlen($contar);
 
 //encontar caracer;
 
 $frase = "The live IS sicK";
 echo "<br/>";
 echo strpos($frase,"live");
 echo "<br/>";
 $frase = str_replace("live","dc",$frase);
 echo $frase;
 echo "<br/>";
 echo strtolower($frase);
 echo "<br/>";
 echo strtoupper($frase);
 
 
 
 

        