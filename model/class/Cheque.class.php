<?php
require_once 'C:/Dropbox/www/multidental/db/PDOConnectionFactory.class.php';

class cheque extends PDOConnectionFactory {
    
    private $idcheque, $nome, $banco, $agencia, $conta, $data, $idFinanceiro;
    
    public function __construct() {
        
    }
    
    public function getIdcheque() {
        return $this->idcheque;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getBanco() {
        return $this->banco;
    }

    public function getAgencia() {
        return $this->agencia;
    }

    public function getConta() {
        return $this->conta;
    }

    public function getData() {
        return $this->data;
    }

    public function getIdFinanceiro() {
        return $this->idFinanceiro;
    }
    
    public function setIdcheque($idcheque) {
        $this->idcheque = $idcheque;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setBanco($banco) {
        $this->banco = $banco;
    }

    public function setAgencia($agencia) {
        $this->agencia = $agencia;
    }

    public function setConta($conta) {
        $this->conta = $conta;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function setIdFinanceiro($idFinanceiro) {
        $this->idFinanceiro = $idFinanceiro;
    }
}
