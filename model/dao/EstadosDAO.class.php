<?php

require_once 'C:/Dropbox/www/multidental/model/class/Estados.class.php';

class EstadosDAO extends Estados {

    private $conexao;

    public function EstadosDAO() {
        $this->conexao = PDOConnectionFactory::getConnection();
    }

    public function select($query=null) {
        try {
            if ($query === null) {
                //Executa a query
                $stmt = $this->conexao->query("SELECT * FROM estados");
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
}

?>
