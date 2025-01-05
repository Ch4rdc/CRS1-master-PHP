<?php

/* 
 //CONDICIONAL
 * 
 * IF: 
 * if (condicion){
 * instrucciones
 * }else{
 * otras condiciones
 * }
 */
//operadores lógicos
/*
 && AND Y
 || OR 0
 ! NOT or
 
 */
//operadores de comparación
/*
 * == igual
 * === identico
 * != distinto
 * <>=diferente
 * !== no identico
 * <menor que
 * >mayor que
 * <= menor o igual que 
 * >= mayor igual que
*/
$color = "rosado ";

if($color == "rojo"){
echo "EL COLOR ES ROJO";    
}else{
    echo "EL COLOR NO ES ROJO";
}
echo "<br>";

$year = 2019;

if ($year == 2019){
    echo "Estamos en el 2019";
}else{
    echo "no estamos en el año 2019";
}

//Ejemplo 3
$nombre = "David";
$ciudad = "madrid";
$edad = 16; 
$mayoria = 18;

if($edad >= $mayoria){
   echo "<h1> La persona  $nombre es mayor de edad <h2>";
   echo "<h2> Y es de $ciudad <h2>";
}
else{
    
    echo "<h3> $nombre no es mayor de edad <h3>";
}

//Ejemplo 4 
/*
if(dia == 1){
    echo "lunes";
}else if(dia==2){
    echo "martes";
}else if(dia==3){
    echo "miercoles";
}else if(dia==4){
    echo "jueves";
}else if(dia==5){
    echo "viernes";
}else{
    echo "es fin de semana";
} */

//SWITCH

$dias = 1;
        
 switch($dias){
     case 1: echo "LUNES";
         break;
     case 2: echo "Martes";
         break;
     case 3: echo "Miercoles";
         break;
     case 4: echo "Jueves";
         break;
     case 5: echo "Viernes";
         break;
     default:
         echo "Es fin de semana";
 }
 
 echo "<hr>";

//ejemplo 5

$edad1 = 18;
$edad2 = 64;
$edad_oficial = 16;

if($edad_oficial >= $edad1  && $edad_oficial <= $edad2){
    
    echo "estas dentro del rango" ; 
}else{
    echo "no puede trabajar";
}

echo "<hr>";
$pais = "España";
if( $pais == "España" || $pais == "Mexico" || $pais == "Colombia"){
    echo "<h1> En este pais se habla español </h1>";
}else{
    echo "En este pais no se habla español";
}

//GOTO 
GOTO marca;

echo "<h3> Instruccion 1 </h3>";
echo "<h3> Instruccion 1 </h3>";
echo "<h3> Instruccion 1 </h3>";
echo "<h3> Instruccion 1 </h3>";

marca:
    echo "Me he saltado 4 echos";
