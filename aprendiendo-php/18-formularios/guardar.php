<?php

if(isset($_GET['titulo']) && isset($_GET['des'])){
    
    echo $_GET['titulo'];
    echo $_GET['des'];
    
    echo "Los datos llegaron correctamente";
}else{
    echo "Los datos no estan llegando a la consola";
}

