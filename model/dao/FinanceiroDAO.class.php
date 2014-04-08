<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OrrcamentoDAO
 *
 * @author Igor Lula
 */
require_once 'C:/Dropbox/www/multidental/model/class/Financeiro.class.php';

class FinanceiroDAO extends Financeiro {

    private $conexao;

    public function TratamentoDAO() {
        $this->conexao = PDOConnectionFactory::getConnection();
    }

    public function insert($financeiro) {
        try {
            //query de insert
            $stmt = $this->conexao->prepare("INSERT INTO financeiro (valor, DtPagamento, idcategoria, idPaciente, idTipoMovimentacao) VALUES (?, ?, ?, ?, ?)");
            
            $stmt->bindValue(1, $financeiro->getValor());
            $stmt->bindValue(2, $financeiro->getDtPagamento);
            $stmt->bindValue(3, $financeiro->getIdCategoria());
            $stmt->bindValue(4, $financeiro->getIdPaciente());
            $stmt->bindValue(5, $financeiro->getIdTipoMovimentacao());
            
            //execução da query de insert
            $stmt->execute();
            
            $this->close();
        } catch (PDOException $e) {
            echo 'ERRO: '.$e->getMessage();
        }
    }

    public function update($financeiro, $idFinanceiro) {
        
    }

    public function select($idFinanceiro) {
        
    }

    public function selectFormaPagamento() {
        try {
            //query de select
            $this->stmt = $this->conexao->query("SELECT * FROM formapagamento WHERE idformapagamento > 0");

//            //execução da query
//            $stmt->execute();
            //fecha a conexao
            $this->close();

            //retornando o resultado da consulta / array
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }

    public function selectBandeiraCartao() {
        try {
            $stmt = $this->conexao->query("SELECT * FROM bandeiracartao ORDER BY descricao");

            $this->close();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }

    public function delete($idFinanceiro) {
        
    }

}
