<?php

//Bucle while 
//Estructura de control que itera o repite la ejecicion de determinada cantidad de veces.

$numero = 0;

while($numero <= 100){
    echo "$numero";
    
    if ($numero != 100){
        echo ", ";
    }
   
    $numero++;
}
echo "<hr>";
//isset comprueba si la variable existe 

if (isset($_GET['numero'])){
    //castear es cambiar el tipo de dato
    $numero = $_GET['numero'];
}
else{
    $numero = 1;
}
   echo "<h1>Tabla de multiplicar del número $numero</h1>";
   
   $contador = 1;
   while($contador <= 10){
       echo "$numero X $contador = " .($numero*$contador) . "<br/>";
       $contador++;
   }
   
 //DO WHILE 
   
  //Se ejecuta por lo menos una vez 
  
   $edad = 18;
   $contador =1;
   do{
      
       echo"acceso al $contador";
       ++$contador;
       echo "<br>";
       
   }while($edad >= 18 && $contador <=10);
   
  //
