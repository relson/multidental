<?php

require_once 'C:/Dropbox/www/multidental/db/PDOConnectionFactory.class.php';

class Financeiro extends PDOConnectionFactory {
    
    private $idFinanceiro;
    private $idTipoMovimentacao;
    private $valor;
    private $DtPagamento;
    private $idCategoria;
    private $idPaciente;
    private $idFormaPagamento;


    public function __construct() {
        
    }
    
    public function Financeiro($idFinanceiro, $idTipoMovimentacao, $valor, $DtPagamento, $idCategoria, $idPaciente, $idFormaPagamento) {
        self::setIdFinanceiro($idFinanceiro);
        self::setTipoMovimentacao($idTipoMovimentacao);
        self::setValor($valor);
        self::setDtPagamento($DtPagamento);
        self::setIdCategoria($idCategoria);
        self::setIdPaciente($idPaciente);
        self::setIdFormaPagamento($idFormaPagamento);
    }
    
    public function getIdFinanceiro() {
        return $this->idFinanceiro;
    }

    public function getIdTipoMovimentacao() {
        return $this->idTipoMovimentacao;
    }

    public function getValor() {
        return $this->valor;
    }
    
    public function getDtPagamento() {
        return $this->DtPagamento;
    }

    public function getIdCategoria() {
        return $this->idCategoria;
    }

    public function getIdPaciente() {
        return $this->idPaciente;
    }
    
    public function getIdFormaPagamento() {
        return $this->idFormaPagamento;
    }

    public function setIdFinanceiro($idFinanceiro) {
        $this->idFinanceiro = $idFinanceiro;
    }

    public function setIdTipoMovimentacao($idTipoMovimentacao) {
        $this->idTipoMovimentacao = $idTipoMovimentacao;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }
    
    public function setDtPagamento($DtPagamento) {
        $this->DtPagamento = $DtPagamento;
    }

    public function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
    }

    public function setIdPaciente($idPaciente) {
        $this->idPaciente= $idPaciente;
    }

    public function setIdFormaPagamento($idFormaPagamento) {
        $this->idFormaPagamento = $idFormaPagamento;
    }
}
