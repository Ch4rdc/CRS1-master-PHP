<?php

/* 
EJERCICIO5: Crear un array con el contenido de la tabla:
 * 
 * ACCION   AVENTURA   DEPORTE
   GTA      ASSASINS     FIFA19
   COD      CRASH          PES19
 * PUBG  PRINCIPE OF PERCIA   MOTO GP 19
 */

  $tabla = array(
     "ACCION" => array("GTA","COD","PUBG"),
      "AVENTURA" => array("ASSASINS","CRASH","PRINCIPE OF PERCIA"),
      "DEPORTE" => array("FIFA19", "PES19", "MOTO GP19")
  );
  
  $categorias = array_keys($tabla);
  ?>
<table border="1">
        <?php require_once 'includesejercicio5/encabezado.php'; ?>
        <?php require_once 'includesejercicio5/primera.php' ?>
        <?php require_once 'includesejercicio5/segunda.php' ?>
        <?php require_once 'includesejercicio5/tercera.php' ?>
    
    
      
    
</table>