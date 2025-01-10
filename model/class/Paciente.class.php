<?php

require_once './db/PDOConnectionFactory.class.php';

class Paciente extends PDOConnectionFactory {
    
    private $idPaciente;
    private $responsavel;    
    private $idPessoa;
    private $convenio;
    private $status;
    
    public function __construct() {
        
    }

    public function Paciente($responsavel, $idPessoa,$convenio) {
        self::setResponsavel($responsavel);
        self::setIdPessoa($idPessoa); 
        self::setConvenio($convenio);
    }
    
    public function getIdPaciente() {
        return $this->idPaciente;
    }

    public function setIdPaciente($idPaciente) {
        $this->idPaciente = $idPaciente;
    }

    public function getResponsavel() {
        return $this->responsavel;
    }

    public function setResponsavel($responsavel) {
        $this->responsavel = $responsavel;
    }

    public function getIdPessoa() {
        return $this->idPessoa;
    }

    public function setIdPessoa($idPessoa) {
        $this->idPessoa = $idPessoa;
    }

    public function getConvenio() {
        return $this->convenio;
    }

    public function setConvenio($convenio) {
        $this->convenio = $convenio;
    }
    
    public function getStatus() {
        return $this->status;
    }
    
    public function setStatus($status) {
        $this->status = $status;               
    }
}
?>
