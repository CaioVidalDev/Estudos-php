<?php

require_once "Animal.php";

class Ave extends Animal{

    private $corPena;

    function locomover(){
        echo "Voando";
    }
    function alimentar(){
        echo "Sementes";
    }
    function emitirSom(){
        echo "Som de ave";
    }

    public function fazerNinho(){
        echo "Fazer ninho";
    }

    public function getCorPena(){
        return $this->corPena;
    }

    public function setCorPena($corPena){
        $this->corPena = $corPena;
    }
}