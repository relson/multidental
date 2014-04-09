<?php

require_once 'C:/Dropbox/www/multidental/model/class/Tratamento.class.php';

class TratamentoDAO extends Tratamento {

    private $conexao;

    public function TratamentoDAO() {
        $this->conexao = PDOConnectionFactory::getConnection();
    }

    public function insert($tratamento) {
        try {
            //query de insert
            $stmt = $this->conexao->prepare("INSERT INTO tratamento (idPaciente, data, procedimento, valor, DtCadastro) VALUES (?, ?, ?, ?, ?)");

            //valores encapsulados nas variaveis da classe Tratamento
            $stmt->bindValue(1, $tratamento->getIdPaciente());
            $stmt->bindValue(2, $tratamento->getData());
            $stmt->bindValue(3, $tratamento->getProcedimento());
            $stmt->bindValue(4, $tratamento->getValor());
            $stmt->bindValue(5, $tratamento->getDtCadastro());

            //execução da query
            $stmt->execute();

            //fecha conexão
            $this->close();
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }

    public function insertFinanceiro($financeiro) {
        try {
            //query de insert
            $stmt = $this->conexao->prepare("INSERT INTO financeiro (valor, DtPagamento, idcategoria, idPaciente, idTipoMovimentacao, idFormaPagamento) VALUES (?, ?, ?, ?, ?, ?)");

            $stmt->bindValue(1, $financeiro->getValor());
            $stmt->bindValue(2, $financeiro->getDtPagamento());
            $stmt->bindValue(3, $financeiro->getIdCategoria());
            $stmt->bindValue(4, $financeiro->getIdPaciente());
            $stmt->bindValue(5, $financeiro->getIdTipoMovimentacao());
            $stmt->bindValue(6, $financeiro->getIdFormaPagamento());

            //execução da query de insert
            $stmt->execute();

            $this->close();

            return $this->conexao->lastInsertId();
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }

    public function insertCartao($cartao) {
        try {
            $stmt = $this->conexao->prepare("INSERT INTO cartao (parcelas, idBandeiraCartao, idFinanceiro) VALUE (?, ?, ?)");

            $stmt->bindValue(1, $cartao->getParcelas());
            $stmt->bindValue(2, $cartao->getIdbandeiracartao());
            $stmt->bindValue(3, $cartao->getIdFinanceiro());

            $stmt->execute();

            $this->close();
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }

    public function insertCheque($cheque) {
        try {
            $stmt = $this->conexao->prepare("INSERT INTO cheque (nome, banco, agencia, conta, data, idFinanceiro) VALUES (?, ?, ?, ?, ?, ?)");

            $stmt->bindValue(1, $chque->getNome());
            $stmt->bindValue(2, $chque->getBanco());
            $stmt->bindValue(3, $chque->getAgencia());
            $stmt->bindValue(4, $chque->getConta());
            $stmt->bindValue(5, $chque->getData());
            $stmt->bindValue(6, $cheque->getIdFinanceiro());

            $stmt->execute();

            $this->close();
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }

    public function insertDeposito($deposito) {
        try {
            $stmt = $this->conexao->prepare("INSERT INTO depositobancario (comprovante, idFinanceiro) VALUES (?, ?)");

            $stmt->bindValue(1, $deposito->getComprovante());
            $stmt->bindValue(2, $deposito->getIdFinanceiro());

            $stmt->execute();

            $this->close();
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }

    public function insertPlano($plano) {
        try {
            $stmt = $this->conexao->prepare("INSERT INTO planodentario (plano, idFinanceiro) VALUES (?, ?)");

            $stmt->bindValue(1, $plano->getPlano());
            $stmt->bindValue(2, $plano->getIdFinanceiro());

            $stmt->execute();

            $this->close();
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }

    public function insertTransferencia($transferencia) {
        try {
            $stmt = $this->conexao->prepare("INSERT INTO trasferencia (comprovante, idFinanceiro) VALUES (?, ?)");

            $stmt->bindValue(1, $transferencia->getComprovante());
            $stmt->bindValue(3, $transferencia->getIdFinanceiro());

            $stmt->execute();

            $this->close();
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }

    public function insertDespesa($despesa) {
        try {
            $stmt = $this->conexao->prepare("INSERT INTO financeiro (descricao, valor, DtPagamento, idcategoria, idTipoMovimentacao, idFormaPagamento) VALUES (?, ?, ?, ?, ?, ?)");

            $stmt->bindValue(1, $despesa->getDescricao());
            $stmt->bindValue(2, $despesa->getValor());
            $stmt->bindValue(3, $despesa->getDtPagamento());
            $stmt->bindValue(4, $despesa->getIdCategoria());
            $stmt->bindValue(5, $despesa->getIdTipoMovimentacao());
            $stmt->bindValue(6, $despesa->getIdFormaPagamento());

            $stmt->execute();

            $this->close();
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }

    public function update($tratamento, $idTratamento) {
        try {
            //query de update
            $stmt = $this->conexao->prepare("UPDATE tratamento SET data=?, procedimento=?, valor=?, orcamentoAprovado=?, DtAprovaOrcamento=?, realizado=?, DtCadastro=? WHERE idTratamento=?");

            //valores encapsulados nas variaveis da classe Tratamento
            $stmt->bindValue(1, $tratamento->getData());
            $stmt->bindValue(2, $tratamento->getProcedimento());
            $stmt->bindValue(3, $tratamento->getValor());
            $stmt->bindValue(4, $tratamento->getOrcamentoAprovado());
            $stmt->bindValue(5, $tratamento->getDtAprovaOrcamento());
            $stmt->bindValue(6, $tratamento->getRealizado());
            $stmt->bindValue(7, $tratamento->getDtCadastro());
            $stmt->bindValue(8, $idTratamento);

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

    public function selectOrcamento($idPaciente) {
        try {
            //query de select
            $stmt = $this->conexao->prepare("SELECT t.DtCadastro, t.procedimento, t.valor, pe.nome FROM tratamento t "
                    . "LEFT JOIN paciente p on (p.idPaciente = t.idPaciente) "
                    . "LEFT JOIN pessoa pe on (pe.idPessoa = p.idPessoa)"
                    . "WHERE t.idPaciente=? and t.orcamentoAprovado='Sim' "
                    . "ORDER BY t.DtCadastro");

            $stmt->bindValue(1, $idPaciente);

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

    public function selectTotal($idPaciente) {
        try {
            //query de select
            $stmt = $this->conexao->prepare("SELECT sum(valor) as total FROM tratamento WHERE idPaciente=? and orcamentoAprovado='Sim' and pago=0 ");

            $stmt->bindValue(1, $idPaciente);

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

    public function selectFormaPagamento($query = null) {
        try {
            if ($query === NULL) {
                //query de select
                $stmt = $this->conexao->prepare("SELECT * FROM formapagamento");
            } else {
                //query de select
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

    public function selectBandeiraCartao() {
        try {
            $stmt = $this->conexao->query("SELECT * FROM bandeiracartao ORDER BY descricao");

            $this->close();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }

    public function selecao($query) {
        try {
            $stmt = $this->conexao->query($query);

            $this->close();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }
    
    public function selecaoTotalBalanco($tipoMovimentacao) {
        try {
            $stmt = $this->conexao->prepare("SELECT sum(valor) as valor FROM financeiro WHERE `idTipoMovimentacao` = ?");
            
            $stmt->bindValue(1, $tipoMovimentacao);
            
            $stmt->execute();
            
            $this->close();
            
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'ERRO: '.$e->getMessage();
        }
    }
    
    public function selectTotalMes($tipoMovimentacao, $mes) {
        try {
            $stmt = $this->conexao->prepare("SELECT sum(valor) as valor FROM financeiro WHERE `idTipoMovimentacao` = ? AND DATE_FORMAT(`DtPagamento`, '%c') = ?");
            
            $stmt->bindValue(1, $tipoMovimentacao);
            $stmt->bindValue(2, $mes);
            
            $stmt->execute();
            
            $this->close();
            
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'ERRO: '.$e->getMessage();
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
            echo 'ERRO: ' . $e->getMessage();
        }
    }

}
