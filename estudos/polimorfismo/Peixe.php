<?php

require_once "Animal.php";

class Peixe extends Animal{
    private $corEscama;
    
    function locomover(){
        echo "Nando";
    }
    function alimentar(){
        echo "Comendo substancias";
    }
    function emitirSom(){
        echo "Nao faz som";
    }

    public function soltarBolha(){
        echo "Soltou uma bolha";
    }

    public function getCorEscama(){
        return $this->corEscama;
    }

    public function setCorEscama($corEscama){
        $this->corEscama = $corEscama;
    }
}