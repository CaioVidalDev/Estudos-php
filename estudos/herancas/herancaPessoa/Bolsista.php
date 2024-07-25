<?php 
require_once "Aluno.php";

class Bolsista extends Aluno{
    private $bolsa;

    public function renovarBolsa(){
        echo "Renovando bolsa do aluno " . $this->getNome();
    }

    public function pagarMensalidade(){
        echo "Pagando Mensalidade de " . $this->getNome() . "com deconto";
    }

    public function getBolsa(){
        return $this->bolsa;
    }

    public function setBolsa($bolsa){
        $this->bolsa = $bolsa;
    }
}