<?php

require_once 'C:/Dropbox/www/multidental/db/PDOConnectionFactory.class.php';

class Tratamento extends PDOConnectionFactory {

    private $idTratamento;
    private $idPaciente;
    private $data;
    private $procedimento;
    private $valor;
    private $orcamentoAprovado;
    private $DtAprovaOrcamento;
    private $formaPagamento;
    private $parcelamento;
    private $realizado;
    private $status;
    private $DtCadastro;

    public function __construct() {
        
    }

    public function Tratamento($idTratamento, $idPaciente, $data, $procedimento, $valor, $orcamentoAprovado, $DtAprovaOrcamento, $formaPagamento, $parcelamento, $realizado, $status, $DtCadastro) {
        self::setIdTratamento($idTratamento);
        self::setIdPaciente($idPaciente);
        self::setData($data);
        self::setProcedimento($procedimento);
        self::setValor($valor);
        self::setOrcamentoAprovado($orcamentoAprovado);
        self::setDtAprovaOrcamento($DtAprovaOrcamento);
        self::setFormaPagamento($formaPagamento);
        self::setParcelamento($parcelamento);
        self::setRealizado($realizado);
        self::setStatus($status);
        self::setDtCadastro($DtCadastro);
    }

    public function getIdTratamento() {
        return $this->idTratamento;
    }

    public function getIdPaciente() {
        return $this->idPaciente;
    }

    public function getData() {
        return $this->data;
    }

    public function getProcedimento() {
        return $this->procedimento;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getOrcamentoAprovado() {
        return $this->orcamentoAprovado;
    }
    
    public function getDtAprovaOrcamento() {
        return $this->DtAprovaOrcamento;
    }

    public function getDtCadastro() {
        return $this->DtCadastro;
    }


    public function getFormaPagamento() {
        return $this->formaPagamento;
    }

    public function getParcelamento() {
        return $this->parcelamento;
    }
    
    public function getRealizado() {
        return $this->realizado;
    }

    public function getData2BR($data) {
        return $this->date2BR($data);
    }

    public function getData2US($data) {
        return $this->date2US($data);
    }

    public function setIdTratamento($idTratamento) {
        $this->idTratamento = $idTratamento;
    }

    public function setIdPaciente($idPaciente) {
        $this->idPaciente = $idPaciente;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function setProcedimento($procedimento) {
        $this->procedimento = $procedimento;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function setOrcamentoAprovado($orcamentoAprovado) {
        $this->orcamentoAprovado = $orcamentoAprovado;
    }
    
    public function setAprovaOrcamento($DtAprovaOrcamento) {
        $this->DtAprovaOrcamento = $DtAprovaOrcamento;
    }
    
    public function setDtCadastro($DtCadastro) {
        $this->DtCadastro = $DtCadastro;
    }

    public function setFormaPagamento($formaPagamento) {
        $this->formaPagamento = $formaPagamento;
    }

    public function setParcelamento($parcelamento) {
        $this->parcelamento = $parcelamento;
    }
    
    public function setRealizado($realizado) {
        $this->realizado = $realizado;
    }

    public function convertValor($valor) {
        return $this->valor2float($valor);
    }

}
