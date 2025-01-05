<?php

/*
 * EJERCICO 1 Hacer un programa en PHP que tenga un array con 8 numero enteros y que haga lo siguiente:
 * 
 * -recorrerlo y mostarlo
 * -ordernarlo y mostrarlo
 * -mostrar su longitud
 * -buscar algun elemento
 */

//funciones 

function mostrarArray($numeros){
    $resultado = "";
 foreach ($numeros as $numero) {
    $resultado .= $numero ."<br/>";
 }
 return $resultado;
}
//crear array
$numeros = array ('1','8','2','7','3','6','4','5');
//recorrerlo array
echo "<H3> Mostrar array </H3>";
 echo mostrarArray($numeros);
 //Ordenar array
 echo "<H3> Mostrar array ordenado</H3>";
 sort($numeros);
 echo mostrarArray($numeros);
//Mostrar Longitud
 echo "<h3> Mostrar Longitud </h3>";
 echo sizeof($numeros);
 echo "<br/>";
 echo count($numeros);
//busqueda en el array

if(isset($_GET ['numero1'])){
      $busqueda= $_GET['numero1'];
 echo "<h3> Busqueda en el array el num $busqueda</h3>";

$search = array_search($busqueda,$numeros);
if(!empty($search)){
    echo "El número se encutran dentro del array en el indice $search";
}else{
    echo "El número no se encuentra dentro del array";
}

}else{
    echo "<h3> Introduce números por la URL </h3>" ;
}