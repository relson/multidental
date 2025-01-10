<?php

require_once './model/class/Convenio.class.php';

class ConvenioDAO extends Convenio {
    
    private $conexao;
    
    public function ConvenioDAO() {
        $this->conexao = PDOConnectionFactory::getConnection();
    }
    
    public function insert($convenio) {
        try {
            //query de insert
            $stmt = $this->conexao->prepare("INSERT INTO convenio (nome, telefone, estado) VALUES (?, ?, ?)");
            
            //valores encapsulados nas variaveis da classe Convenio
            $stmt->bindValue(1, $convenio->getNome());
            $stmt->bindValue(2, $convenio->getTelefone());
            $stmt->bindValue(3, $convenio->getEstado());
            
            //execução da query
            $stmt->execute();
            
            return $this->conexao->lastInsertId();
            
            //Fecha a conexao
            $this->conexao = null;
        } catch (PDOException $e) {
            echo 'ERRO: '.$e->getMessage();
        }
    }
    
    public function update($convenio, $idConvenio) {
        try {
            //query de update
            $stmt = $this->conexao->prepare("UPDATE convenio SET nome=?, telefone=?, estado=? WHERE idConvenio=?");
            
            //valores encapsulados nas variaveis da classe Convenio
            $stmt->bindValue(1, $convenio->getNome());
            $stmt->bindValue(2, $convenio->getTelefone());
            $stmt->bindValue(3, $convenio->getEstado());
            $stmt->bindValue(4, $idConvenio);
            
            //Execução da query
            $stmt->execute();
            
            $this->conexao->commit();
            
            //Fecha conexao
            $this->conexao = null;
        } catch (PDOException $e) {
            echo 'ERRO: '.$e->getMessage();
        }
    }
    
    public function select($query=null) {
        try {
            if ($query === null) {
                //Executa a query
                $stmt = $this->conexao->query("SELECT * FROM convenio");
            } else {
                $stmt = $this->conexao->query($query);
            }

            //Fecha a conexao
            $this->conexao = null;
            
            //retornando o resultado da consulta / array
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'ERRO: '.$e->getMessage();
        }
    }
    
    public function delete($idConvenio) {
        try {
            //query de delete
            $num = $this->conexao->exec("DELETE FROM convenio WHERE idConvenio=$idConvenio");
            
            //caso seja executado retorna o numero de linhas afetadas
            if ($num >= 1) {
                return $num;
            } else {
                return 0;
            }
        } catch (PDOException $e) {
            echo 'ERRO: '.$e->getMessage();
        }
    }
    
    public function selectID($nomeConvenio) {
        try {
            $stmt = $this->conexao->prepare("SELECT idConvenio FROM convenio WHERE nome=?");
            $stmt->bindValue(1, $nomeConvenio);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'ERRO: '.$e->getMessage();
        }
    }
}
?>
