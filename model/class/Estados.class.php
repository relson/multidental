<?php

require_once 'C:/Dropbox/www/multidental/db/PDOConnectionFactory.class.php';

class Estados extends PDOConnectionFactory {
    
    private $idEstado;
    private $sigla;
    private $estado;
    
    public function __construct() {
        
    }
    
    public function Estados($sigla, $estado) {
        self::setSigla($sigla);
        self::setEstado($estado);
    }
    
    public function getIdEstado() {
        return $this->idEstado;
    }

    public function setIdEstado($idEstado) {
        $this->idEstado = $idEstado;
    }

    public function getSigla() {
        return $this->sigla;
    }

    public function setSigla($sigla) {
        $this->sigla = $sigla;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }
}
?>
