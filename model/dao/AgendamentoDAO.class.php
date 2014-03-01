<?php

require_once ('C:/Dropbox/www/multidental/model/class/Agendamento.class.php');

class AgendamentoDAO extends Agendamento {

    private $conexao;

    public function AgendamentoDAO() {
        $this->conexao = PDOConnectionFactory::getConnection();
    }

    public function insert($agendamento) {
        try {
            //query de insert
            $stmt = $this->conexao->prepare("INSERT INTO agendamento (idPaciente, tipoagendamento, data, horario, observacao) VALUES (?, ?, ?, ?, ?)");

            //valores encapsulados nas variaveis da classe agendamento
            $stmt->bindValue(1, $agendamento->getIdPaciente());
            $stmt->bindValue(2, $agendamento->getTipoagendamento());
            $stmt->bindValue(3, $agendamento->getData());
            $stmt->bindValue(4, $agendamento->getHora());
            $stmt->bindValue(5, $agendamento->getObservacao());

            //execução da query
            $stmt->execute();

            $id = $this->conexao->lastInsertId();

            //fecha conexão
            $this->close();

            return $id;
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }

    public function update($agendamento, $idagendamento) {
        try {
            //query de update
            $stmt = $this->conexao->prepare("UPDATE agendamento SET tipoagendamento=?, data=?, horario=?, observacao=? WHERE idagendamento=?");

            //valores encapsulados nas variaveis da classe Agendamento
            $stmt->bindValue(1, $agendamento->getTipoagendamento());
            $stmt->bindValue(2, $agendamento->getData());
            $stmt->bindValue(3, $agendamento->getHora());
            $stmt->bindValue(4, $agendamento->getObservacao());
            $stmt->bindValue(5, $idagendamento);

            //execução da query
            $stmt->execute();

            //fechando a conexão
            $this->close();
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }

    public function select() {
        try {
            //query de select
            $stmt = $this->conexao->query("SELECT * FROM agendamento");

            //fechando a conexão
            $this->conexao = null;

            //retornando os valores selecionados
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }

    public function selectEdit($idAgendamento) {
        try {
            //query de select
            $stmt = $this->conexao->query("SELECT * FROM agendamento WHERE idagendamento=$idAgendamento");

            //fechando a conexão
            $this->close();

            //retornando os valores selecionados
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }
    
    public function selectData($data) {
        try {
            $date = $this->date2US($data);
            $stmt = $this->conexao->query("SELECT * FROM agendamento WHERE status = '1' and data = '$date'");
            
            $this->close();
            
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'ERRO: '.$e->getMessage();
        }
        }
    
    public function selectInnerData($data) {
        try {
            $date = $this->date2US($data);
            $stmt = $this->conexao->query("SELECT a.idAgendamento, a.idPaciente, a.tipoAgendamento, a.data, HOUR(a.hora) as hora, MINUTE(a.hora) as minuto, p.nome, p.telefone, p.email FROM
                                                  agendamento a INNER JOIN paciente pa INNER JOIN pessoa p
                                                  on pa.idPaciente = a.idPaciente and pa.idPessoa = p.idPessoa
                                                  WHERE a.status = '1' and a.data = '$date'
                                                  ORDER BY a.hora");
            
            $this->close();
            
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'ERRO: '.$e->getMessage();
        }
        }

    public function delete($idagendamento) {
        try {
            //query de delete
            $stmt = $this->conexao->prepare("UPDATE agenda SET status=0 WHERE idagendamento=?");

            //encapsulando valores nas variaveis da classe Agendamento
            $stmt->bindValue(1, $idagendamento);

            //execução da query
            $stmt->execute();

            //fechando a conexão
            $this->conexao = null;
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }

}
