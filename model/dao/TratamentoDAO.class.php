<?php

require_once 'C:/Dropbox/www/multidental/model/class/Pessoa.class.php';

class TratamentoDAO extends Tratamento {

    private $conexao;

    public function TratamentoDAO() {
        $this->conexao = PDOConnectionFactory::getConnection();
    }

    public function insert($tratamento) {
        try {
            //query de insert
            $stmt = $this->conexao->prepare("INSERT INTO tratamento (idPaciente, data, procedimento, valor) VALUES (?, ?, ?, ?)");

            //valores encapsulados nas variaveis da classe Tratamento
            $stmt->bindValue(1, $tratamento->getIdPaciente());
            $stmt->bindValue(2, $tratamento->getData());
            $stmt->bindValue(3, $tratamento->getProcedimento());
            $stmt->bindValue(4, $tratamento->getValor());

            //execução da query
            $stmt->execute();

            //fecha conexão
            $this->close();
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }

    public function update($tratamento, $idTratamento) {
        try {
            //query de update
            $stmt = $this->conexao->prepare("UPDATE tratamento SET data=?, procedimento=?, valor=?, orcamentoAprovado=?, realizado=? WHERE idTratamento=?");

            //valores encapsulados nas variaveis da classe Tratamento
            $stmt->bindValue(1, $tratamento->getData());
            $stmt->bindValue(2, $tratamento->getProcedimento());
            $stmt->bindValue(3, $tratamento->getValor());
            $stmt->bindValue(4, $tratamento->getOrcamentoAprovado());
            $stmt->bindValue(5, $tratamento->getRealizado());
            $stmt->bindValue(6, $idTratamento);

            //execução da query
            $stmt->execute();

            //fecha conexão
            $this->close();
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }

    public function select($idPaciente, $query = null) {
        try {
            if ($query === NULL) {
                //query de select
                $stmt = $this->conexao->prepare("SELECT * FROM tratamento WHERE idPaciente=? and status=true ORDER BY data");

                $stmt->bindValue(1, $idPaciente);
            } else {
                $stmt = $this->conexao->prepare($query);
            }

            //execução da query
            $stmt->execute();

            //fecha conexão
            $this->close();

            //retornando o resultado da consulta / array
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }

    public function selectEdit($idTratamento, $idPaciente) {
        try {
            //query de select
            $stmt = $this->conexao->prepare("SELECT * FROM tratamento WHERE idTratamento=? and idPaciente=? and status=true");

            $stmt->bindValue(1, $idTratamento);
            $stmt->bindValue(2, $idPaciente);
            
            //execução da query
            $stmt->execute();

            //fecha conexão
            $this->close();

            //retornando o resultado da consulta / array
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }
    
    public function search($idPaciente, $from, $to) {
        try {
            $stmt = $this->conexao->prepare("SELECT * FROM tratamento WHERE idPaciente=? and data BETWEEN ? AND ? ORDER BY data");
            
            $stmt->bindValue(1, $idPaciente);
            $stmt->bindValue(2, $from);
            $stmt->bindValue(3, $to);
            
            //execução da query
            $stmt->execute();

            //fecha conexão
            $this->close();

            //retornando o resultado da consulta / array
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getTraceAsString();
        }
        }

    public function delete($idTratamento) {
        try {
            //query de delete
            $stmt = $this->conexao->prepare("UPDATE tratamento SET status='0' WHERE idTratamento=?");
            
            $stmt->bindValue(1, $idTratamento);
            
            //execução da query
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'ERRO: '.$e->getMessage();
        }
    }
}
