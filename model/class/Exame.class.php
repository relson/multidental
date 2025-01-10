<?php

require_once './db/PDOConnectionFactory.class.php';

class Exame extends PDOConnectionFactory {

    private $idExame;
    private $idPaciente;
    private $dataExame;
    private $pressaoArterial;
    private $freqCardiaca;
    private $freqRespiratoria;
    private $padraoEsqueletico;
    private $perfilFacial;
    private $extraBucal;
    private $localizacao;
    private $forma;
    private $tamanho;
    private $cor;
    private $superficie;
    private $consistencia;
    private $insercao;
    private $sinaisSecundarios;

    public function __construct() {
        
    }

    public function Exame($idExame, $idPaciente, $dataExame, $pressaoArterial, $freqCardiaca, $freqRespiratoria, $padraoEsqueletico, $perfilFacial, $extraBucal, $localizacao, $forma, $tamanho, $cor, $superficie, $consistencia, $insercao, $sinaisSecundarios) {
        self::setIdExame($idExame);
        self::setIdPaciente($idPaciente);
        self::setDataExame($dataExame);
        self::setPressaoArterial($pressaoArterial);
        self::setFreqCardiaca($freqCardiaca);
        self::setFreqRespiratoria($freqRespiratoria);
        self::setPadraoEsqueletico($padraoEsqueletico);
        self::setPerfilFacial($perfilFacial);
        self::setExtraBucal($extraBucal);
        self::setLocalizacao($localizacao);
        self::setForma($forma);
        self::setTamanho($tamanho);
        self::setCor($cor);
        self::setSuperficie($superficie);
        self::setConsistencia($consistencia);
        self::setInsercao($insercao);
        self::setSinaisSecundarios($sinaisSecundarios);
    }

    public function getIdExame() {
        return $this->idExame;
    }

    public function getIdPaciente() {
        return $this->idPaciente;
    }

    public function getDataExame() {
        return $this->dataExame;
    }

    public function getPressaoArterial() {
        return $this->pressaoArterial;
    }

    public function getFreqCardiaca() {
        return $this->freqCardiaca;
    }

    public function getFreqRespiratoria() {
        return $this->freqRespiratoria;
    }

    public function getPadraoEsqueletico() {
        return $this->padraoEsqueletico;
    }

    public function getPerfilFacial() {
        return $this->perfilFacial;
    }

    public function getExtraBucal() {
        return $this->extraBucal;
    }

    public function getLocalizacao() {
        return $this->localizacao;
    }

    public function getForma() {
        return $this->forma;
    }

    public function getTamanho() {
        return $this->tamanho;
    }

    public function getCor() {
        return $this->cor;
    }

    public function getSuperficie() {
        return $this->superficie;
    }

    public function getConsistencia() {
        return $this->consistencia;
    }

    public function getInsercao() {
        return $this->insercao;
    }

    public function getSinaisSecundarios() {
        return $this->sinaisSecundarios;
    }

    public function setIdExame($idExame) {
        $this->idExame = $idExame;
    }

    public function setIdPaciente($idPaciente) {
        $this->idPaciente = $idPaciente;
    }

    public function setDataExame() {
        $this->dataExame = date("Y-m-d");
    }

    public function setPressaoArterial($pressaoArterial) {
        $this->pressaoArterial = $pressaoArterial;
    }

    public function setFreqCardiaca($freqCardiaca) {
        $this->freqCardiaca = $freqCardiaca;
    }

    public function setFreqRespiratoria($freqRespiratoria) {
        $this->freqRespiratoria = $freqRespiratoria;
    }

    public function setPadraoEsqueletico($padraoEsqueletico) {
        $this->padraoEsqueletico = $padraoEsqueletico;
    }

    public function setPerfilFacial($perfilFacial) {
        $this->perfilFacial = $perfilFacial;
    }

    public function setExtraBucal($extraBucal) {
        $this->extraBucal = $extraBucal;
    }

    public function setLocalizacao($localizacao) {
        $this->localizacao = $localizacao;
    }

    public function setForma($forma) {
        $this->forma = $forma;
    }

    public function setTamanho($tamanho) {
        $this->tamanho = $tamanho;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }

    public function setSuperficie($superficie) {
        $this->superficie = $superficie;
    }

    public function setConsistencia($consistencia) {
        $this->consistencia = $consistencia;
    }

    public function setInsercao($insercao) {
        $this->insercao = $insercao;
    }

    public function setSinaisSecundarios($sinaisSecundarios) {
        $this->sinaisSecundarios = $sinaisSecundarios;
    }
}
