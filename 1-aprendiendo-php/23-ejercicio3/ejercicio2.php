<?php

/* 

EJERCICIO2
 1.-Una funcion
 2.-Validar un mail con filter_Var
 3.-Recoge la variable por get y validarla
 4.-Mostrar el resultado
 */

function ValidarEmail($email){
    $status = "No valido";
    if(!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)){
     $status = "valido";
    }
       return $status;
        
}

    if(isset($_GET['email'])){
        echo ValidarEmail($_GET["email"]);
        
    }else{
        echo "pase por get un email...";
    }

