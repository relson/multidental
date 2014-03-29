<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of financeiro
 *
 * @author Igor Lula
 */

require_once 'C:/Dropbox/www/multidental/db/PDOConnectionFactory.class.php';

class Financeiro extends PDOConnectionFactory {
    
    private $idFinanceiro;
    private $tipoMovimentacao;
    private $descricao;
    private $valor;
    private $idCategoria;
    private $idPaciente;
    
    public function __construct() {
        
    }
    
    public function Financeiro($idFinanceiro, $tipoMovimentacao, $descricao, $valor, $idCategoria, $idPaciente) {
        self::setIdFinanceiro($idFinanceiro);
        self::setTipoMovimentacao($tipoMovimentacao);
        self::setDescricao($descricao);
        self::setValor($valor);
        self::setIdCategoria($idCategoria);
        self::setIdPaciente($idPaciente);
    }
    
    public function getIdFinanceiro() {
        return $this->idFinanceiro;
    }

    public function getTipoMovimentacao() {
        return $this->tipoMovimentacao;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getIdCategoria() {
        return $this->idCategoria;
    }

    public function getIdPaciente() {
        return $this->idPaciente;
    }

    public function setIdFinanceiro($idFinanceiro) {
        $this->idFinanceiro = $idFinanceiro;
    }

    public function setTipoMovimentacao($tipoMovimentacao) {
        $this->tipoMovimentacao = $tipoMovimentacao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
    }

    public function setIdPaciente($idPaciente) {
        $this->idPessoa = $idPaciente;
    }


}
