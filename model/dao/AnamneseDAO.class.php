<?php

require_once 'C:/Dropbox/www/multidental/model/class/Anamnese.class.php';

class AnamneseDAO extends Anamnese {
    
    private $conexao;
    
    public function AnamneseDAO() {
        $this->conexao = PDOConnectionFactory::getConnection();
    }
    
    public function insert($anamnese) {
        try {
            //query de insert
            $stmt = $this->conexao->prepare("INSERT INTO anamnese (idPaciente, histMedica, histFamiliar, histPessoal, histOdontologica) VALUES (?, ?, ?, ?, ?, ?, ?)");
            
            //valores encapsulados nas variaveis da classe Anamnese
            $stmt->bindValue(1, $anamnese->getIdPaciente());
            $stmt->bindValue(2, $anamnese->getHistMedica());
            $stmt->bindValue(3, $anamnese->getHistFamiliar());
            $stmt->bindValue(4, $anamnese->getHistPessoal());
            $stmt->bindValue(5, $anamnese->getHistOdontologica());
            
            //execução da query
            $stmt->execute();
            
            return $this->conexao->lastInsertId();
            
            //fecha a conexão
            $this->conexao = null;
        } catch (PDOException $e) {
            echo 'ERRO: '.$e->getMessage();
        }
    }
    
    public function update($anamnese, $idAnamnese) {
        try {
            //query de update
            $stmt = $this->conexao->prepare("UPDATE anamnese SET histMedica=?, histFamiliar=?, histPessoal=?, histOdontologica=? WHERE idAnamnese=?");
            
            //valores encapsulados nas variaveis da classe Usuario
            $stmt->bindValue(1, $anamnese->getHistMedica());
            $stmt->bindValue(2, $anamnese->getHistFamiliar());
            $stmt->bindValue(3, $anamnese->getHistPessoal());
            $stmt->bindValue(4, $anamnese->getHistOdontologica());
            $stmt->bindValue(5, $idAnamnese);
            
            //execução da query
            $stmt->execute();
            
            //fecha a conexão
            $this->conexao = null;
        } catch (PDOException $e) {
            echo 'ERRO: '.$e->getMessage();
        }
    }
    
    public function select($query=null, $idPaciente) {
        try {
            if ($query === null) {
                //executa a query
                $stmt = $this->conexao->query("SELECT * FROM anamnese where idPaciente = $idPaciente");
            } else {
                $stmt = $this->conexao->query($query);
            }
            
            //fecha conexao
            $this->conexao = null;
            
            //retornando o resultado da consulta / array
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }  catch (PDOException $e) {
            echo 'Erro: '.$e->getMessage();
        }
    }
    
    public function delete($idAnamnese) {
        try {
            //query de delete
            $num = $this->conexao->exec("DELETE FROM anamnese WHERE idAnamnese=$idAnamnese");
            
            //caso seja executado retorna o numero de linhas afetadas
            if ($num >= 1) {
                return $num;
            } else {
                return 0;
            }
        } catch (PDOException $e) {
            echo 'Erro: '.$e->getMessage();
        }
    }
}
?>
