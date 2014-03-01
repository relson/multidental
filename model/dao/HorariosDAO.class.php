<?php

require_once 'C:/Dropbox/www/multidental/model/class/Horarios.class.php';

class HorariosDAO extends Horarios {
    
    private $conexao;
    
    public function HorariosDAO() {
        $this->conexao = PDOConnectionFactory::getConnection();
    }
    
    public function select() {
        try {
            $sql = "SELECT * FROM horarios";
            $stmt = $this->conexao->query($sql);
            
            $this->conexao = null;
            
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'ERRO: '.$e->getMessage();
        }
    }
    
    public function selectHora($horas) {
        try {
            $sql = "SELECT HOUR(hora) as hora, MINUTE(hora) as minuto FROM horarios WHERE status=1 ";
            
            for ($i=0, $length = count($horas); $i < $length; $i++) {
                $sql = $sql." and hora!=?";
            }
            
            $stmt = $this->conexao->prepare($sql);

            for ($i=0, $length = count($horas); $i < $length; $i++) {
                $stmt->bindValue($i+1, $horas[$i]);
            }
            
            $stmt->execute();
            
            //fecha a conexão
            $this->close();
            
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'ERRO: '.$e->getMessage();
        }
        }
}