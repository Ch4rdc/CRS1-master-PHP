<?php
require_once 'ModeloBase.php';

class nota extends ModeloBase {
    
    public $nombre;
    public $contenido;
    
    public function __construct(){
        parent::__construct();
    }
    
    function getNombre() {
        return $this->nombre;
    }

    function getContenido() {
        return $this->contenido;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setContenido($contenido) {
        $this->contenido = $contenido;
    }

  
    
} 