<?php

require_once "Animal.php";

class Reptil extends Animal{
    private $corEscama;
    
    function locomover(){
        echo "Correndo";
    }
    function alimentar(){
        echo "Comendo Vegetais";
    }
    function emitirSom(){
        echo "Som de reptil";
    }

    public function getCorEscama(){
        return $this->corEscama;
    }

    public function setCorEscama($corEscama){
        $this->corEscama = $corEscama;
    }
}