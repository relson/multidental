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
    private $stmt;

    public function TratamentoDAO() {
        $this->conexao = new PDOConnectionFactory();
        $this->conexao = PDOConnectionFactory::getConnection();
    }

    public function insert($financeiro) {
        
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
