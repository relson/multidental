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
        
    }
    
    public function update($financeiro, $idFinanceiro) {
        
    }
    
    public function select($idFinanceiro) {
        
    }
    
    public function delete($idFinanceiro) {
        
    }
}
