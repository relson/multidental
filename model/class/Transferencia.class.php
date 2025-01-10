<?php
require_once './db/PDOConnectionFactory.class.php';

class Transferencia extends PDOConnectionFactory {
    
    private $idtransferencia, $comprovante, $idFinanceiro;
    
    public function __construct() {
        
    }
    
    public function getIdtransferencia() {
        return $this->idtransferencia;
    }

    public function getComprovante() {
        return $this->comprovante;
    }
    
    public function getIdFinanceiro() {
        return $this->idFinanceiro;
    }

    public function setIdtransferencia($idtransferencia) {
        $this->idtransferencia = $idtransferencia;
    }

    public function setComprovante($comprovante) {
        $this->comprovante = $comprovante;
    }

    public function setIdFinanceiro($idFinanceiro) {
        $this->idFinanceiro = $idFinanceiro;
    }
}
