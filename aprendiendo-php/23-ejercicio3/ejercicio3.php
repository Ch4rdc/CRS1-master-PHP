<?php

/* 
EJERCIO3: Hacer una interfaz de usuario(formulario)con dos inputs  y 4 botones 
uno para sumar,restar,dividir y multiplicar.
 */

if(isset($_POST['numero1']) && isset($_POST['numero2']));

 $resultado = false;
 
        if(isset($_POST['sumar'])){
            $resultado = "El resultado es: ".($_POST['numero1']+ $_POST['numero2']);
        }
        if(isset($_POST['restar'])){
            $resultado = "El resultado es: ".($_POST['numero1']- $_POST['numero2']);
        }
        if(isset($_POST['dividir'])){
            $resultado = "El resultado es: ".($_POST['numero1']/ $_POST['numero2']);
        }
        if(isset($_POST['multiplicar'])){
            $resultado = "El resultado es: ".($_POST['numero1']* $_POST['numero2']);
        }
?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>FORMULARIO</title>
    </head>
    <body>
        <form action="" method="POST">
            
            <label for="numero1">Numero 1</label> <br/>
            <input type="number" name="numero1"/> <br/><br/>
            
            <label for="numero2">Numero 2</label> <br/>
            <input type="number" name="numero2"/> <br/><br/>
            
            <input type="submit" value="sumar" name="sumar">
            <input type="submit" value="restar" name="restar">
            <input type="submit" value="dividir" name="dividir">
            <input type="submit" value="multiplicar" name="multiplicar">
            
        </form>
        <?php
        if($resultado != false):
            echo "<h2> $resultado</h2>";
        endif;
        ?>
    </body>
</html>
