<?php

require_once 'C:/Dropbox/www/multidental/model/class/Exame.class.php';

class ExameDAO extends Exame {

    private $conexao;
    private $stmt;

    public function ExameDAO() {
        $this->conexao = PDOConnectionFactory::getConnection();
    }

    public function insert($exame) {
        try {
            //query de insert
            $stmt = $this->conexao->prepare("INSERT INTO exames (idPaciente, dataExame, pressaoArterial, freqCardiaca, freqRespiratoria, padraoEsqueletico, perfilFacial, extraBucal, localizacao, forma, tamanho, cor, superficie, consistencia, insercao, sinaisSecundarios) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            //valores encapsulados nas variaveis da classe Exame
            $stmt->bindValue(1, $exame->getIdPaciente());
            $stmt->bindValue(2, $exame->getDataExame());
            $stmt->bindValue(3, $exame->getPressaoArterial());
            $stmt->bindValue(4, $exame->getFreqCardiaca());
            $stmt->bindValue(5, $exame->getFreqRespiratoria());
            $stmt->bindValue(6, $exame->getPadraoEsqueletico());
            $stmt->bindValue(7, $exame->getPerfilFacial());
            $stmt->bindValue(8, $exame->getExtraBucal());
            $stmt->bindValue(9, $exame->getLocalizacao());
            $stmt->bindValue(10, $exame->getForma());
            $stmt->bindValue(11, $exame->getTamanho());
            $stmt->bindValue(12, $exame->getCor());
            $stmt->bindValue(13, $exame->getSuperficie());
            $stmt->bindValue(14, $exame->getConsistencia());
            $stmt->bindValue(15, $exame->getInsercao());
            $stmt->bindValue(16, $exame->getSinaisSecundarios());

            //execução da query
            $stmt->execute();

            //fecha a conexao
            $this->close();
        } catch (PDOException $ex) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }

    public function update($exame, $idExame) {
        try {
            //query de insert
            $stmt = $this->conexao->prepare("UPDATE exames SET idPaciente=?, pressaoArterial=?, freqCardiaca=?, freqRespiratoria=?, padraoEsqueletico=?, perfilFacial=?, extraBucal=?, localizacao=?, forma=?, tamanho=?, cor=?, superficie=?, consistencia=?, insercao=?, sinaisSecundarios=? WHERE idExames=?");

            //valores encapsulados nas variaveis da classe Paciente
            $stmt->bindValue(1, $exame->getIdPaciente());
            //$stmt->bindValue(2, $exame->getDataExame());
            $stmt->bindValue(2, $exame->getPressaoArterial());
            $stmt->bindValue(3, $exame->getFreqCardiaca());
            $stmt->bindValue(4, $exame->getFreqRespiratoria());
            $stmt->bindValue(5, $exame->getPadraoEsqueletico());
            $stmt->bindValue(6, $exame->getPerfilFacial());
            $stmt->bindValue(7, $exame->getExtraBucal());
            $stmt->bindValue(8, $exame->getLocalizacao());
            $stmt->bindValue(9, $exame->getForma());
            $stmt->bindValue(10, $exame->getTamanho());
            $stmt->bindValue(11, $exame->getCor());
            $stmt->bindValue(12, $exame->getSuperficie());
            $stmt->bindValue(13, $exame->getConsistencia());
            $stmt->bindValue(14, $exame->getInsercao());
            $stmt->bindValue(15, $exame->getSinaisSecundarios());
            $stmt->bindValue(16, $idExame);

            //execução da query
            $stmt->execute();

            //fecha a conexao
            $this->close();
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }

    public function select($idPaciente, $query = null) {
        try {
            if ($query === null) {
                //query de select
                $stmt = $this->conexao->prepare("SELECT * FROM exames WHERE idPaciente = ? and status=true");

                $stmt->bindValue(1, $idPaciente);
            } else {
                $stmt = $this->conexao->prepare($query);
            }

            $stmt->execute();

            //fecha conexao
            $this->close();

            //retornando o resultado da consulta / array
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
        }
    }

    public function selectEdit($idPaciente, $idExame) {
        try {
            //executa a query
            $stmt = $this->conexao->prepare("SELECT * FROM exames WHERE idPaciente = ? and idExames = ? and status=true");

            $stmt->bindValue(1, $idPaciente);
            $stmt->bindValue(2, $idExame);

            $stmt->execute();

            //fecha conexao
            $this->close();

            //retornando o resultado da consulta / array
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
        }
    }

    public function search($idPaciente, $pesquisa) {
        try {
            $stmt = $this->conexao->prepare("SELECT e.*,
                                                    p.nome 
                                             FROM exames e INNER JOIN paciente pa INNER JOIN pessoa p 
                                             WHERE e.idPaciente = ? and e.status = true and e.idExames LIKE '%$pesquisa%' and
                                             pa.idPaciente = ? and p.idPessoa = pa.idPessoa
                                             ORDER BY idExames");

            $stmt->bindValue(1, $idPaciente);
            $stmt->bindValue(2, $idPaciente);

            $stmt->execute();

            //fecha a conexao
            $this->close();

            //retornando o resultado da consulta / array
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }

    public function delete($idExame) {
        try {
            //query de delete
            $num = $this->conexao->exec("UPDATE exames SET status='0' WHERE idExames=$idExame");

            //caso seja executado retorna o numero de linhas afetadas
            if ($num >= 1) {
                return $num;
            } else {
                return 0;
            }
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
        }
    }

}
