<?php
require_once 'C:/Dropbox/www/multidental/db/PDOConnectionFactory.class.php';

class cartao extends PDOConnectionFactory {

    private $idcartao, $descricao, $parcelas, $idbandeiracartao, $idFinanceiro;
    
    function __construct() {
    }
    
    public function getIdcartao() {
        return $this->idcartao;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getParcelas() {
        return $this->parcelas;
    }

    public function getIdbandeiracartao() {
        return $this->idbandeiracartao;
    }
    
    public function getIdFinanceiro() {
        return $this->idFinanceiro;
    }

    public function setIdcartao($idcartao) {
        $this->idcartao = $idcartao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setParcelas($parcelas) {
        $this->parcelas = $parcelas;
    }

    public function setIdbandeiracartao($idbandeiracartao) {
        $this->idbandeiracartao = $idbandeiracartao;
    }

    public function setIdFinanceiro($idFinanceiro) {
        $this->idFinanceiro = $idFinanceiro;
    }
}
