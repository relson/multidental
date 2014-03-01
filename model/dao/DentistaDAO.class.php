<?php

require_once 'C:/Dropbox/www/multidental/model/class/Dentista.class.php';

class DentistaDAO extends Dentista {
        
    private $conexao;
    
    public function DentistaDAO() {
        $this->conexao = PDOConnectionFactory::getConnection();
    }
    
    public function insert($dentista) {
        try {
            //query insert
            $stmt = $this->conexao->prepare("INSERT INTO dentista (cro, idPessoa, idLogin) VALUES (?, ?, ?)");
            
            //valores encapsulados nas variaveis da classe Dentista
            $stmt->bindValue(1, $dentista->getCro());
            $stmt->bindValue(2, $dentista->getIdPessoa());
            $stmt->bindValue(3, $dentista->getIdLogin());
            
            //execucao da query
            $stmt->execute();
            
            return $this->conexao->lastInsertId();
            
            //fecha conexao
            $this->conexao = null;
        }  catch (PDOException $e) {
            echo 'ERRO: '.$e->getMessage();
        }
    }
    
    public function update($dentista, $idDentista) {
        try {
            //query de update
            $stmt = $this->conexao->prepare("UPDATE dentista SET cro=?, idPessoa=?, idLogin=? WHERE idDentista=?");
            
            //valores encapsulados nas variaveis da classe Dentista
            $stmt->bindValue(1, $dentista->getCro());
            $stmt->bindValue(2, $dentista->getIdPessoa());
            $stmt->bindValue(3, $dentista->getIdLogin());
            $stmt->bindValue(4, $idDentista);
            
            //execucao da query
            $stmt->execute();
            
            //fecha conexao
            $this->conexao = null;
        }  catch (PDOException $e) {
            echo 'ERRO: '.$e->getMessage();
        }
    }
    
    public function select($query=null) {
        try {
            if ($query === null) {
                //execucao da query de select
                $stmt = $this->conexao->query("SELECT * FROM dentista");
            } else {
                $stmt = $this->conexao->query($query);
            }
            
            //fecha a conexao
            $this->conexao = null;
            
            //retorna o resultado da consulta / array
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }  catch (PDOException $e) {
            echo 'ERRO: '.$e->getMessage();
        }
    }
    
    public function delete($idDentista) {
        try {
            //query de delete
            $num = $this->conexao->exec("DELETE FROM dentista WHERE idDentista=$idDentista");
            
            //caso seja executado, retorna o numero de linhas afetadas
            if ($num >= 1) {
                return $num;
            } else {
                return 0;
            }
        }  catch (PDOException $e) {
            echo 'ERRO: '.$e->getMessage();
        }
    }
}
?>