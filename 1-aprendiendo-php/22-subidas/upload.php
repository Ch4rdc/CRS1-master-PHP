<?php

$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

if($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png"){
    if(!is_dir('images')){
        mkdir('images',0777);
        move_uploaded_file($archivo['tmp_name'],'images/'.$nombre);
        header("refresh: 5; URL:index.php");
        echo "<h1>Imagen cargada correctamente</h1>" ;
    }
}else{
    header("refresh: 5; URL=index.php");
    echo "<h1> sube una imagen con un formato correcto, por favor...</h1>";
}
