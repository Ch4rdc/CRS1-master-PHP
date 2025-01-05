<?php

class coche{
    //Atributos o propiedad (variables)
    public $color;
    public $marca;
    public $modelo;
    public $velocidad;
    public $caballaje;
    public $plazas;
    
    public function __construct() {
        $this->color = "Rojo";
        $this->marca = "ferrari";
        $this->modelo = "Aventador";
        $this->velocidad = 300;
        $this->caballaje = 500;
        $this->plazas = 2;   
    }
    //métodos, son acciones que hace el objeto (antes funciones)
    public function getcolor(){
        return $this-> color; //busca en esta clase la propiedad X
    }  
    public function setColor($color){
        $this-> color = $color;
    }
    public function setmodelo($modelo){
        $this-> modelo = $modelo;
    }
    public function acelerar(){
        $this->velocidad++;
    } 
    public function frenar(){
        $this->velocidad--;
    }
    public function getVelocidad(){
    return $this->velocidad;
   }
}//fin definicion de la clase