<?php

class ContaBanco {

    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function abrirConta($tipo) {
        $this->setTipo($tipo);
        $this->setStatus(true);
        if($tipo == "CC"){
            $this->setSaldo(50);
        }elseif ($tipo == "CP"){
            $this->setSaldo(150);
        }
    }

    public function fecharConta() {
        if($this->getSaldo() > 0) {
            echo "Conta ainda tem dinheiro, não posso fecha-la";
        } else if ($this->getSaldo() > 0){
            echo "Conta esta em debito";
        } else {
            $this->setStatus(false);
            echo "Conta de " . $this->getDono() . "Fechada com sucesso.";;
        }
    }

    public function depositar($v){
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $v);
            echo "Deposito de $v na conta de " . $this->getDono();
        } else {
            echo "Conta Fechada. Não consigo depositar";
        }
    }

    public function sacar($v){
        if ($this->getStatus()){
            if($this->getSaldo() > $v){
                $this->setSaldo($this->getSaldo() - $v);
                echo "Saque de $v autorizado na conta de " . $this->getDono();
            } else {
                echo "Saldo Insuficiente para saque";
            }
        } else {
            echo "Não posso sacar de uma conta fechada";
        }
    }
    public function pagarMensal(){
        if($this->getTipo() == "CC"){
            $v = 12;
        } elseif ($this->getTipo() == "CP" ) {
            $v = 20;
        } 

        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() - $v);
            echo "Mensalidade de $v debitada na conta de " . $this->getDono() ;
        } else {
            echo "Problemas com a conta. Não posso cobrar"; 
        }
    }

    public function ContaBanco(){
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "Conta Criada com sucesso";
    }

    public function getNumConta(){
        return $this->numConta;
    }

    public function setNumConta($numConta){
        $this->numConta = $numConta;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getDono(){
        return $this->dono;
    }

    public function setDono($dono){
        $this->dono = $dono;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($status){
        $this->status = $status;
    }

}