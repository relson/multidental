<?php

require_once 'C:/Dropbox/www/multidental/db/PDOConnectionFactory.class.php';

class Horarios extends PDOConnectionFactory {
    
    private $idHorarios;
    private $hora;
    private $status;
    
    public function __construct() {
        
    }
    
    public function Horarios($hora, $status) {
        self::setHora($hora);
        self::setStatus($status);
    }
    
    public function getIdAgenda() {
        return $this->idHorarios;
    }

    public function setIdAgenda($idAgenda) {
        $this->idHorarios = $idAgenda;
    }

    public function getHora() {
        return $this->hora;
    }

    public function setHora($hora) {
        $this->hora = $hora;
    }
    
    public function getStatus() {
        return $this->status;
    }
    
    public function setStatus($status) {
        $this->status = $status;
    }


}