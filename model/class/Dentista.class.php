<?php

require_once 'C:/Dropbox/www/multidental/db/PDOConnectionFactory.class.php';

class Dentista extends PDOConnectionFactory {
    
    private $idDentista;
    private $cro;
    
    private $idPessoa;
    private $idLogin;
    
    public function __construct() {
        
    }
    
    public function Dentista($cro) {
        self::setCro($cro);
    }
    
    public function getIdDentista() {
        return $this->idDentista;
    }

    public function setIdDentista($idDentista) {
        $this->idDentista = $idDentista;
    }

    public function getCro() {
        return $this->cro;
    }

    public function setCro($cro) {
        $this->cro = $cro;
    }

    public function getIdPessoa() {
        return $this->idPessoa;
    }

    public function setIdPessoa($idPessoa) {
        $this->idPessoa = $idPessoa;
    }

    public function getIdLogin() {
        return $this->idLogin;
    }

    public function setIdLogin($idLogin) {
        $this->idLogin = $idLogin;
    }
}
?>