<?php

require_once "Animal.php";

class Mamifero extends Animal{

    private $corPelo;

    function locomover(){
        echo "Correndo";
    }
    function alimentar(){
        echo "Mamando";
    }
    function emitirSom(){
        echo "Som de mamifero";
    }

    public function getCorPelo(){
        return $this->corPelo;
    }

    public function setCorPelo($corPelo){
        $this->corPelo = $corPelo;
    }
}