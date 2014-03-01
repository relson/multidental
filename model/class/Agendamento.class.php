<?php

require_once 'C:/Dropbox/www/multidental/db/PDOConnectionFactory.class.php';

class Agendamento extends PDOConnectionFactory {
    
    private $idagendamento;
    private $idPaciente;
    private $tipoagendamento;
    private $data;
    private $hora;
    private $observacao;
    private $status;


    public function __construct() {
        
    }
    
    public function Agendamento($idagendamento, $idPaciente, $tipoagendamento, $data, $hora, $observacao, $status) {
        self::setIdagendamento($idagendamento);
        self::setPaciente($idPaciente);
        self::setTipoagendamento($tipoagendamento);
        self::setData($data);
        self::setHora($hora);
        self::setObervacao($observacao);
        self::setStatus($status);
    }
    
    public function getIdagendamento() {
        return $this->idagendamento;
    }

    public function getIdPaciente() {
        return $this->idPaciente;
    }

    public function getTipoagendamento() {
        return $this->tipoagendamento;
    }

    public function getData() {
        return $this->data;
    }

    public function getHora() {
        return $this->hora;
    }
    
    public function getObservacao() {
        return $this->observacao;
    }
    
    public function getStatus() {
        return $this->status;
    }

    public function setIdagendamento($idagendamento) {
        $this->idagendamento = $idagendamento;
    }

    public function setIdPaciente($idPaciente) {
        $this->idPaciente = $idPaciente;
    }

    public function setTipoagendamento($tipoagendamento) {
        $this->tipoagendamento = $tipoagendamento;
    }

    public function setData($data) {
        $this->data = $this->date2US($data);
    }

    public function setHora($hora) {
        $this->hora = $hora;
    }
    
    public function setObservacao($observacao) {
        $this->observacao = $observacao;
    }
    
    public function setStatus($status) {
        $this->status = $status;
    }
}