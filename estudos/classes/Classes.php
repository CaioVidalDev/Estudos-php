<?php
  class Carro {

    public string $modelo;
    public string $marca;
    public string $chassi;
    public string $fabricante;

    public function ligar(){
        echo "Carro ligado";
    }

    public function desligar(){
        echo "Carro desligado";
    }

    public function acelerar(){
        echo "Carro acelerando";
    }

    public function frear(){
        echo "Carro freando";
    }
  }

 $corsa = new Carro();
 $corsa->modelo = "Corsa";
 $corsa->marca = "Chevrolet";
 $corsa->chassi = "ABC123";
 $corsa->fabricante = "Chevrolet";
 $corsa->ligar();
 $corsa->acelerar();
 $corsa->frear();
 $corsa->desligar();
 echo "Nome do carro: " . $corsa->modelo; 
