<?php

require_once './model/class/Paciente.class.php';

class PacienteDAO extends Paciente {

    private $conexao;

    public function PacienteDAO() {
        $this->conexao = PDOConnectionFactory::getConnection();
    }

    public function insert($paciente) {
        try {
            //query de insert
            $stmt = $this->conexao->prepare("INSERT INTO paciente (responsavel, idPessoa, convenio) VALUES (?, ?, ?)");

            //valores encapsulados nas variaveis da classe Paciente
            $stmt->bindValue(1, $paciente->getResponsavel());
            $stmt->bindValue(2, $paciente->getIdPessoa());
            $stmt->bindValue(3, $paciente->getConvenio());

            //execução da query
            $stmt->execute();

            $id = $this->conexao->lastInsertId();

            //fecha conexao
            $this->close();

            return $id;
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }

    public function update($paciente, $idPaciente) {
        try {
            //query de update
            $stmt = $this->conexao->prepare("UPDATE paciente SET responsavel=?, idPessoa=?, convenio=? WHERE idPaciente=?");

            //valores encapsulados nas variaveis da classe Paciente
            $stmt->bindValue(1, $paciente->getResponsavel());
            $stmt->bindValue(2, $paciente->getIdPessoa());
            $stmt->bindValue(3, $paciente->getConvenio());
            $stmt->bindValue(4, $idPaciente);

            //execução da query
            $stmt->execute();

            //fecha a conexao
            $this->close();
        } catch (PDOException $e) {
            echo 'ERRO UPDATE: ' . $e->getMessage();
        }
    }

    public function select($idPaciente, $query = null) {
        try {
            if ($query === null) {
                //execução da query de select
                $stmt = $this->conexao->prepare("SELECT  pa.idPaciente as prontuario, pa.responsavel as responsavel, pa.convenio as convenio,
                                                       p.idPessoa as idPessoa, p.nome as nome, p.rg as rg, p.cpf as cpf, p.sexo as sexo, p.estadoCivil as estadoCivil, p.dataNascimento as dataNascimento, p.naturalidade as naturalidade,
                                                       p.rua as rua, p.numero as numero, p.complemento as complemento, p.bairro as bairro, p.cidade as cidade, p.uf as uf, p.cep as cep,
                                                       p.telefone as telefone, p.celular as celular, p.email as email, p.foto as foto
                                                       from Pessoa p inner join Paciente pa
                                                       on p.idPessoa=pa.idPessoa
                                                       WHERE pa.status=true and idPaciente=$idPaciente");
            } else {
                $stmt = $this->conexao->prepare($query);
            }

            $stmt->execute();

            //fecha a conexao
            $this->close();

            //retornando o resultado da consulta / array
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }

    public function selectInner() {
        try {
            $stmt = $this->conexao->query("SELECT pa.idPaciente as prontuario, pa.convenio as convenio, p.nome as nome, p.dataNascimento as idade, p.telefone as telefone, p.celular as celular from
                                                  Pessoa p inner join Paciente pa
                                                  on p.idPessoa=pa.idPessoa
                                                  WHERE pa.status = true
                                                  order by p.nome");

            //fecha a conexao
            $this->close();

            //retornando o resultado da consulta / array
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }

    public function search($pesquisa) {
        try {
            $stmt = $this->conexao->query("SELECT pa.idPaciente as prontuario, pa.convenio as convenio, p.nome as nome, p.dataNascimento as idade, p.telefone as telefone, p.celular as celular, p.email as email from
                                                  Pessoa p inner join Paciente pa
                                                  on p.idPessoa=pa.idPessoa
                                                  WHERE pa.status = true and p.nome LIKE '%$pesquisa%'
                                                  order by p.nome");

            //fecha a conexao
            $this->close();

            //retornando o resultado da consulta / array
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }

    public function delete($idPaciente) {
        try {
            //seta a flag de status para FALSE
            $num = $this->conexao->exec("UPDATE paciente SET status='0' WHERE idPaciente=$idPaciente");

            //caso seja executado retorna o numero de linhas afetadas
            if ($num >= 1) {
                return $num;
            } else {
                return 0;
            }
        } catch (PDOException $e) {
            echo 'ERRO AQUI: ' . $e->getMessage();
        }
    }

}

?>
