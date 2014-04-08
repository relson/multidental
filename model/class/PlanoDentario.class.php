<?php
require_once 'C:/Dropbox/www/multidental/db/PDOConnectionFactory.class.php';

class PlanoDentario extends PDOConnectionFactory {
    
    private $idplanodentario, $plano, $idFinanceiro;
    
    public function __construct() {
        
    }
    
    public function getIdplanodentario() {
        return $this->idplanodentario;
    }

    public function getPlano() {
        return $this->plano;
    }
    
    public function getIdFinanceiro() {
        return $this->idFinanceiro;
    }

    public function setIdplanodentario($idplanodentario) {
        $this->idplanodentario = $idplanodentario;
    }

    public function setPlano($plano) {
        $this->plano = $plano;
    }

    public function setIdFinanceiro($idFinanceiro) {
        $this->idFinanceiro = $idFinanceiro;
    }
}
