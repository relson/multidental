<?php
require_once 'C:/Dropbox/www/multidental/db/PDOConnectionFactory.class.php';

class DepositoBancario extends PDOConnectionFactory {
    
    private $iddepositobancario, $comprovante, $idFinanceiro;
    
    public function __construct() {
        
    }
    
    public function getIddepositobancario() {
        return $this->iddepositobancario;
    }

    public function getComprovante() {
        return $this->comprovante;
    }
    
    public function getIdFinanceiro() {
        return $this->idFinanceiro;
    }

    public function setIddepositobancario($iddepositobancario) {
        $this->iddepositobancario = $iddepositobancario;
    }

    public function setComprovante($comprovante) {
        $this->comprovante = $comprovante;
    }

    public function setIdFinanceiro($idFinanceiro) {
        $this->idFinanceiro = $idFinanceiro;
    }
}
