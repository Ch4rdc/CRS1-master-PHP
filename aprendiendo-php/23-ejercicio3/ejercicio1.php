<?php

/* 
Ejercicio1. Crear un sesion que aumente su valor en uno o disminuya en uno en funcion si el parametro 
get counter esta en 1 o en 0.
 */

session_start();

if(!isset($_SESSION['numero'])){
    $_SESSION['numero'] = 0;
}
    
if(isset($_GET['counter']) && $_GET['counter'] == 1){
      $_SESSION['numero']++;
}

if(isset($_GET['counter']) && $_GET['counter'] == 0 ){
      $_SESSION['numero'] --;
} 
?>

<h2> El valor de la sesión numero es: <?= $_SESSION['numero']?></h2>
<a href="ejercicio1.php?counter=1">aumenta el valor</a><br/>
<a href="ejercicio1.php?counter=0">Disminuyer el valor</a><br/>

