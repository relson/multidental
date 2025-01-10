<?php

require_once './db/PDOConnectionFactory.class.php';

class Anamnese extends PDOConnectionFactory {
    
    private $idAnamnese;
    private $idPaciente;
    private $histMedica;
    private $histFamiliar;
    private $histPessoal;
    private $histOdontologica;
    
    public function __construct() {
        
    }


    public function Anamnese($idPaciente, $queixa, $histDoenca, $histMedica, $histFamiliar, $histPessoal, $histOdontologica) {
        self::setIdPaciente($idPaciente);
        self::setHistMedica($histMedica);
        self::setHistFamiliar($histFamiliar);
        self::setHistPessoal($histPessoal);
        self::setHistOdontologica($histOdontologica);
    }
    
    public function getIdAnamnese() {
        return $this->idAnamnese;
    }

    public function setIdAnamnese($idAnamnese) {
        $this->idAnamnese = $idAnamnese;
    }

    public function getIdPaciente() {
        return $this->idPaciente;
    }

    public function setIdPaciente($idPaciente) {
        $this->idPaciente = $idPaciente;
    }
   
    public function getHistMedica() {
        return $this->histMedica;
    }

    public function setHistMedica($histMedica) {
        $this->histMedica = $histMedica;
    }

    public function getHistFamiliar() {
        return $this->histFamiliar;
    }

    public function setHistFamiliar($histFamiliar) {
        $this->histFamiliar = $histFamiliar;
    }

    public function getHistPessoal() {
        return $this->histPessoal;
    }

    public function setHistPessoal($histPessoal) {
        $this->histPessoal = $histPessoal;
    }

    public function getHistOdontologica() {
        return $this->histOdontologica;
    }

    public function setHistOdontologica($histOdontologica) {
        $this->histOdontologica = $histOdontologica;
    }
}
?>
