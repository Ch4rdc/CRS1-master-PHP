<?php
   //crear una carpeta
    
if(!is_dir('carpetanueva')){
    mkdir('carpetanueva',0777) or die ('No se puede crear la carpeta');
 
}else{
    echo "ya existe la carpeta";
}
    // rmdir("carpetanueva");
echo "<hr/>";
if($gestor = opendir('./carpetanueva')){
    while(false!==($archivo = readdir($gestor))){
        if($archivo != '.' && $archivo != '..'){
             echo $archivo. "<br/>";
        }
    }
}
