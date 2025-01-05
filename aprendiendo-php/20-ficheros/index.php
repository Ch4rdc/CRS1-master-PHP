<?php

//abrir archivo
$abrir_archivo = fopen("fichero.txt", "a+");// Los permisos A+ no permiten leer y escribir;
//leer contenido


while(!feof($abrir_archivo)){
    
   $contenido =fgets($abrir_archivo);
   echo $contenido."<br/>";
}
//Escribir

fwrite($abrir_archivo, "hola");
//cerrar contenido
fclose($abrir_archivo);

/***MANIPULACION DE ARCHIVOS***/

//copiar
    //copy('fichero.txt', 'fichero_copia.txt') or die ('error al copiar');
//renombrar
    //rename('ficherito','ficherito.txt');
//Eliminaer
//unlink('ficherito.txt')or die('error la eliminar');

if(file_exists("ficherito.txt")){
    echo "El archivo existe";
}else{
    echo "No existe";
}


    

