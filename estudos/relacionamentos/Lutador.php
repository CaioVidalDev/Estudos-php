<?php

class Lutador {

    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function Lutador($nome,$nacionalidade,$idade, $altura,$peso,$vitorias,$derrotas,$empates){

        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    
    }

    public function apresentar(){
        echo "Lutador: " . $this->getNome();
        echo "Origem: " . $this->getNacionalidade();
        echo $this->getIdade() . " Anos";
        echo $this->getAltura() . " m de Altura";
        echo "Pesando " .$this->getPeso() . " Kg";
        echo "Ganhou: " . $this->getVitorias();
        echo "Perdeu: " . $this->getDerrotas();
        echo "Empatou: " . $this->getEmpates();
    }

    public function status(){

        echo $this->getNome();
        echo "Categoria: " . $this->getCategoria();
        echo "Ganhou: " . $this->getVitorias();
        echo "Perdeu: " . $this->getDerrotas();
        echo "Empatou: " . $this->getEmpates();
    }

    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() - 1);
    }

    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNacionalidade(){
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;
    }
    
    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function setAltura($altura){
        $this->altura = $altura;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function setPeso($peso){
        $this->peso = $peso;
        $this->setCategoria();
    }

    public function getCategoria(){
        return $this->categoria;
    }

    private function setCategoria(){
        if($this->peso <52.2){
            $this->categoria = "Invalido";
        }elseif($this-> peso <= 70.3){
            $this->categoria = "Leve";
        }elseif($this->categoria <=83.9){
            $this->categoria = "Medio";
        }elseif($this->categoria <= 120.2){
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "Invalido";
        }
    }

    public function getVitorias(){
        return $this->vitorias;
    }

    public function setVitorias($vitorias){
        $this->vitorias = $vitorias;
    }

    public function getDerrotas(){
        return $this->derrotas;
    }

    public function setDerrotas($derrotas){
        $this->derrotas = $derrotas;
    }

    public function getEmpates(){
        return $this->empates;
    }

    public function setEmpates($empates){
        $this->empates = $empates;
    }

}