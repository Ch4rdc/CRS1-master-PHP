<?php

/* 
FUNCIONES:Conjunto de instrucciones que se mandan a llamar un numero determindo de veces.
 */

//EJEMPLO 1 
function names(){
    echo "name1<br>";
    echo "name2<br>";
    echo "name3<br>";
    
}
names();

//EJEMPLO 2
function tabla($num){
   echo "<h4> tabla de multiplicar del numero $num</h4>";
  
   for($x=1; $x<=10; $x++){
       $opera = $num*$x;
       echo " $num x $x = $opera<br>";
   }  
}

/* 
if(isset($_GET['numero'])){
    tabla($_GET['numero']);
}else{
    echo "No hay datos para imprimir la tabla";
}
 * */
 
/* for($i=1; $i<=10; $i++){
    tabla($i);
} */

/*function hola($data1, $data2, $bletz=false){
    $cadena_texto = "";
    if($bletz){
        $cadena_texto .= "<h1>";
    }
    $suma = $data1+$data2;
    $resta= $data1-$data2;
    $division = $data1/$data2;
    $multiplicacion = $data1*$data2;
    
   $cadena_texto .= "<hr/>";
   $cadena_texto .= "suma: $suma<br/>";
   $cadena_texto .= "resta: $resta<br/>";
   $cadena_texto .= "multiplicacion: $multiplicacion<br/>";
   $cadena_texto .= "division: $division <br/>";
    
    if($bletz==true){
        $cadena_texto .= "</h1>";
    }
    return $cadena_texto;
} */
/*
hola(10,20);

hola(8,20,true);
*/
/*function Retorna($name){
return "Mi nombre es...$name";
}
echo Retorna("josecarlos");
function name1 ($dat1){
    return "dat1";
}
*/
//EJMEPLO 3

function nombre2($nombre2){
    $texto= "Mi nombre es...$nombre2";
    return $texto;
}
function nombre($nombre){
    $texto = "Mi nombre es...$nombre";
    return $texto;
}

function nemesis($nombre,$nombre2){
    $texto = nombre($nombre). "<br/>". nombre2($nombre2); 
    return $texto;
}
echo nemesis("jorge","pedro");

