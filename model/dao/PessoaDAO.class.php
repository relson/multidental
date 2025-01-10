<?php

require_once './model/class/Pessoa.class.php';

class PessoaDAO extends Pessoa {

    private $conexao = null;

    public function PessoaDAO() {
        $this->conexao = PDOConnectionFactory::getConnection();
    }

    public function insert($pessoa) {
        try {
            //query de insert
            $stmt = $this->conexao->prepare("INSERT INTO pessoa (nome, rg, cpf, sexo, estadoCivil, dataNascimento, naturalidade, 
                                                                 rua, numero, complemento, bairro, cidade, uf, pais, cep,
                                                                 telefone, celular, email, foto) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            //valores encapsulados nas variaveis da classe Pessoa
            $stmt->bindValue(1, $pessoa->getNome());
            $stmt->bindValue(2, $pessoa->getRg());
            $stmt->bindValue(3, $pessoa->getCpf());
            $stmt->bindValue(4, $pessoa->getSexo());
            $stmt->bindValue(5, $pessoa->getEstadoCivil());
            $stmt->bindValue(6, $pessoa->getDataNascimento());
            $stmt->bindValue(7, $pessoa->getNaturalidade());
            $stmt->bindValue(8, $pessoa->getRua());
            $stmt->bindValue(9, $pessoa->getNumero());
            $stmt->bindValue(10, $pessoa->getComplemento());
            $stmt->bindValue(11, $pessoa->getBairro());
            $stmt->bindValue(12, $pessoa->getCidade());
            $stmt->bindValue(13, $pessoa->getUf());
            $stmt->bindValue(14, $pessoa->getPais());
            $stmt->bindValue(15, $pessoa->getCep());
            $stmt->bindValue(16, $pessoa->getTelefone());
            $stmt->bindValue(17, $pessoa->getCelular());
            $stmt->bindValue(18, $pessoa->getEmail());
            $stmt->bindValue(19, $pessoa->getFoto());

            //execução da query
            $stmt->execute();

            $id = $this->conexao->lastInsertId();

            //fecha a conexão
            $this->close();
            
            return $id;
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }

    public function update($pessoa, $idPessoa) {
        try {
            //query de update
            $stmt = $this->conexao->prepare("UPDATE pessoa SET nome=?, rg=?, sexo=?, estadoCivil=?, dataNascimento=?, naturalidade=?, 
                                             rua=?, numero=?, complemento=?, bairro=?, cidade=?, uf=?, pais=?, cep=?,
                                             telefone=?, celular=?, email=?, foto=? WHERE idPessoa=?");

            //valores encapsulados nas variaveis da classe Usuario
            $stmt->bindValue(1, $pessoa->getNome());
            $stmt->bindValue(2, $pessoa->getRg());
            $stmt->bindValue(3, $pessoa->getSexo());
            $stmt->bindValue(4, $pessoa->getEstadoCivil());
            $stmt->bindValue(5, $pessoa->getDataNascimento());
            $stmt->bindValue(6, $pessoa->getNaturalidade());
            $stmt->bindValue(7, $pessoa->getRua());
            $stmt->bindValue(8, $pessoa->getNumero());
            $stmt->bindValue(9, $pessoa->getComplemento());
            $stmt->bindValue(10, $pessoa->getBairro());
            $stmt->bindValue(11, $pessoa->getCidade());
            $stmt->bindValue(12, $pessoa->getUf());
            $stmt->bindValue(13, $pessoa->getPais());
            $stmt->bindValue(14, $pessoa->getCep());
            $stmt->bindValue(15, $pessoa->getTelefone());
            $stmt->bindValue(16, $pessoa->getCelular());
            $stmt->bindValue(17, $pessoa->getEmail());
            $stmt->bindValue(18, $pessoa->getFoto());
            $stmt->bindValue(19, $idPessoa);

            //execução da query
            $stmt->execute();

            //fecha a conexão
            $this->close();
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }

    public function select($query = null) {
        try {
            if ($query === null) {
                //executa a query
                $stmt = $this->conexao->query("SELECT * FROM pessoa");
            } else {
                $stmt = $this->conexao->query($query);
            }

            //fecha conexao
            $this->close();

            //retornando o resultado da consulta / array
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
        }
    }

    public function delete($idPessoa) {
        try {
            //query de delete
            $num = $this->conexao->exec("DELETE FROM pessoa WHERE idPessoa=$idPessoa");

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

    public function verificaCPF($cpf) {
        try {
            //executa a query
            $stmt = $this->conexao->prepare("SELECT * FROM pessoa where cpf = ?");
            
            $stmt->bindValue(1, $cpf);
            
            $stmt->execute();
            
            //fecha conexao
            $this->close();
            
            //retornando o resultado da consulta / array
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }

    public function validaCPF($cpf = null) {
        // Verifica se um número foi informado
        if (empty($cpf)) {
            return false;
        }

        // Elimina possivel mascara
        $cpf = ereg_replace('[^0-9]', '', $cpf);
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

        // Verifica se o numero de digitos informados é igual a 11 e
        // Verifica se nenhuma das sequências invalidas abaixo 
        // foi digitada. Caso afirmativo, retorna falso
        if (strlen($cpf) != 11) {
            return false;
        } else if ($cpf == '00000000000' ||
                $cpf == '11111111111' ||
                $cpf == '22222222222' ||
                $cpf == '33333333333' ||
                $cpf == '44444444444' ||
                $cpf == '55555555555' ||
                $cpf == '66666666666' ||
                $cpf == '77777777777' ||
                $cpf == '88888888888' ||
                $cpf == '99999999999') {
            return false;
            // Calcula os digitos verificadores para verificar se o
            // CPF é válido
        } else {

            for ($t = 9; $t < 11; $t++) {
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf[$c] * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf[$c] != $d) {
                    return false;
                }
            }
            return true;
        }
    }

}

?>
