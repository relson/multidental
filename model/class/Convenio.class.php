<?php

require_once './db/PDOConnectionFactory.class.php';

class Convenio extends PDOConnectionFactory {
    
    private $idConvenio;
    private $nome;
    private $telefone;
    private $estado;
    
    public function __construct() {
        
    }
    
    public function Convenio($nome, $telefone, $estado) {
        self::setNome($nome);
        self::setTelefone($telefone);
        self::setEstado($estado);
    }
    
    public function getIdConvenio() {
        return $this->idConvenio;
    }

    public function setIdConvenio($idConvenio) {
        $this->idConvenio = $idConvenio;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }
}
?>
