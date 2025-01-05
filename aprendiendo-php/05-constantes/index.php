<?php

//constantes
//son contenerdores de informacion que nunca cambian no puede variar

define('nombre', 'DC');
define('web', 'www.TEST.com');

//la constante se imprime sin el s//contantes predefinidas
echo '<h1>'.nombre .'</h1>';
echo '<h1>'.web .'</h1>';

function holamundo(){
    echo __FUNCTION__;
    echo php__OS;
}

echo holamundo;

