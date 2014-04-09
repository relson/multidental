<?php

require_once './config/imports.php';
require_once './config/sm.php';
require_once './config/Configs.php';

$sm->assign("usuario", 'Talita Lima');

$config = new Configs();
$pacienteDAO = new PacienteDAO();
$tratamentoDAO = new TratamentoDAO();
$financeiroDAO = new FinanceiroDAO();
$financeiro = new Financeiro();
$cartao = new cartao();
$cheque = new cheque();
$deposito = new DepositoBancario();
$plano = new PlanoDentario();
$transferencia = new Transferencia();

$mes = date("M");
$mes_extenso = $config->mesExtenso();

$mespt = $mes_extenso[$mes] . '/' . date('Y');

if (isset($_POST['acao'])) {
    $acao = $_POST['acao'];

    switch ($acao) {
        case 'registraPagamento':
            if (isset($_POST['paciente']) and isset($_POST['formaPagamento']) and isset($_POST['valorPago'])) {
                $idPaciente = $_POST['paciente'];
                $formaPagamento = $_POST['formaPagamento'];
                $valor = $config->valor2float($_POST['valorPago']);

                $financeiro->setIdPaciente($idPaciente);
                $financeiro->setIdTipoMovimentacao('1');
                $financeiro->setValor($valor);
                $financeiro->setDtPagamento(date('Y-m-d H:i:s'));
                $financeiro->setIdFormaPagamento($formaPagamento);

                if ($formaPagamento === '1') {
                    $financeiro->setIdCategoria('3');

                    $idFinanceiro = $tratamentoDAO->insertFinanceiro($financeiro);

                    $cartao->setIdbandeiracartao($_POST['bandeiraCartao']);
                    $cartao->setParcelas($_POST['parcelasCartao']);
                    $cartao->setidFinanceiro($idFinanceiro);

                    $tratamentoDAO->insertCartao($cartao);
                } else if ($formaPagamento === '2') {
                    $financeiro->setIdCategoria('4');

                    $idFinanceiro = $tratamentoDAO->insertFinanceiro($financeiro);

                    $cheque->setNome($_POST['nomeCheque']);
                    $cheque->setBanco($_POST['bancoCheque']);
                    $cheque->setAgencia($_POST['agenciaCheque']);
                    $cheque->setConta($_POST['contaCheque']);
                    $cheque->setData($_POST['dataCheque']);
                    $cheque->setidFinanceiro($idFinanceiro);

                    $tratamentoDAO->insertCheque($cheque);
                } else if ($formaPagamento === '3') {
                    $financeiro->setIdCategoria('1');

                    $idFinanceiro = $tratamentoDAO->insertFinanceiro($financeiro);

                    $deposito->setComprovante($_POST['comprovanteDeposito']);
                    $deposito->setidFinanceiro($idFinanceiro);

                    $tratamentoDAO->insertDeposito($deposito);
                } else if ($formaPagamento === '4') {
                    $financeiro->setIdCategoria('2');

                    $idFinanceiro = $tratamentoDAO->insertFinanceiro($financeiro);
                } else if ($formaPagamento === '5') {
                    $financeiro->setIdCategoria('5');

                    $idFinanceiro = $tratamentoDAO->insertFinanceiro($financeiro);

                    $plano->setPlano($_POST['nomePlano']);
                    $plano->setidFinanceiro($idFinanceiro);

                    $tratamentoDAO->insertPlano($plano);
                } else if ($formaPagamento === '6') {
                    $financeiro->setIdCategoria('1');

                    $idFinanceiro = $tratamentoDAO->insertFinanceiro($financeiro);

                    $transferencia->setComprovante($_POST['comprovanteTransferencia']);
                    $transferencia->setidFinanceiro($idFinanceiro);

                    $tratamentoDAO->insertTransferencia($transferencia);
                }

                header("Location: Financeiro.php");
            }
            break;
        case 'registraDespesa':
            if (isset($_POST['descricao']) and isset($_POST['data']) and isset($_POST['formapagamento']) and isset($_POST['valorPago'])) {
                $formaPagamento = $_POST['formapagamento'];
                $valor = $config->valor2float($_POST['valorPago']);

                $financeiro->setDescricao($_POST['descricao']);
                $financeiro->setDtPagamento($config->date2US($_POST['data']));
                $financeiro->setValor($valor);
                $financeiro->setIdTipoMovimentacao('2');
                $financeiro->setIdFormaPagamento($formaPagamento);

                if ($formaPagamento === '1') {
                    $financeiro->setIdCategoria('3');
                } else if ($formaPagamento === '2') {
                    $financeiro->setIdCategoria('4');
                } else if ($formaPagamento === '3') {
                    $financeiro->setIdCategoria('1');
                } else if ($formaPagamento === '4') {
                    $financeiro->setIdCategoria('2');
                } else if ($formaPagamento === '6') {
                    $financeiro->setIdCategoria('1');
                }

//                echo $financeiro->getDescricao().'<br>'
//                     .$financeiro->getDtPagamento().'<br>'.
//                        $financeiro->getValor().'<br>'.
//                        $financeiro->getIdTipoMovimentacao().'<br>'.
//                        $financeiro->getIdFormaPagamento().'<br>'.
//                        $financeiro->getIdCategoria();
//                exit();

                $tratamentoDAO->insertDespesa($financeiro);

                header("Location: Financeiro.php");
            }
            break;
        default:
            break;
    }
} else if (isset($_GET['pag']) and $_GET['pag']) {
    $pacientes = $pacienteDAO->search("%");

    $sm->assign("pacientes", $pacientes);
    $sm->display("selecionarPacienteFinanceiro.tpl");
} else if (isset($_GET['pac']) and $_GET['pac']) {
    $paciente = $pacienteDAO->selectInner();
    $sm->assign("paciente", $paciente);

    $sm->display("selecionarPacienteFinanceiro.tpl");

// lp = lança pagamento
} else if (isset($_GET['lp'])) {
    $lancamento = $tratamentoDAO->select($_GET['lp']);
    $total;

    echo '<table>
            <tr id="rotulo">
                <td id="data">Data</td>
                <td id="servico">Serviço</td>
                <td id="valor">Valor - R$</td>
            </tr>';

    while (key($lancamento) != NULL) {
        $total = $total + $lancamento['valor'];
        echo "<tr nMouseOver=\"" . "javascript:this.style.backgroundColor = '#d2d2d2'\" onMouseOut=\"" . "javascript:this.style.backgroundColor = ''\"" .
        '<td id="data">' . $lancamento['data'] . '</td>
                <td id="servico">' . $lancamento['procedimento'] . '</td>
                <td id="valor">' . $lancamento['valor'] . '</td>
            </tr>';
    }

    echo '<tr>
            <td id="total">TOTAL</td>
            <td id="total"></td>
            <td id="valorTotal">' . $total . '</td>
          </tr>';
} else if (isset($_POST['idP'])) {
    $id = $_POST['paciente'];
    $sm->assign("idPaciente", $id);

    $dados = $tratamentoDAO->selectOrcamento($id);
    $total = $tratamentoDAO->selectTotal($id);
    if (empty($dados)) {
        echo "<script>alert('Não consta débito do paciente selecionado!'); location.href = 'Financeiro.php?pag=true';</script>";
    } else {

        for ($i = 0; $i < sizeof($dados); $i++) {
            $dados[$i]['DtCadastro'] = $config->date2BR(substr($dados[$i]['DtCadastro'], 0, 10));
        }

        $sm->assign("nome", $dados[0]['nome']);
        $sm->assign("dados", $dados);

        $sm->assign("total", $total[0]['total']);

        $sm->display('lancarPagamento.tpl');
    }
} else if (isset($_GET['idrp'])) {
    $id = $_GET['idrp'];

    $dados = $tratamentoDAO->selectOrcamento($id);
    $total = $tratamentoDAO->selectTotal($id);
    $formas = $tratamentoDAO->selectFormaPagamento();
    $cartao = $tratamentoDAO->selectBandeiraCartao();

    $sm->assign("nome", $dados[0]['nome']);
    $sm->assign("paciente", $id);
    $sm->assign("total", $total[0]['total']);
    $sm->assign("formas", $formas);
    $sm->assign("bandeiras", $cartao);

    $sm->display("registraPagamento.tpl");
} else if (isset($_GET['des']) and $_GET['des']) {
    $query = 'SELECT * FROM formapagamento WHERE idformapagamento <> 5';
    $formas = $tratamentoDAO->selectFormaPagamento($query);

    $sm->assign("formas", $formas);

    $sm->display("registraDespesa.tpl");
} else {
    $mes = $config->getMesNum(date('M'));
    $mesNome = date('d') . ' de ' . $config->getMesBR(date('M')) . ' de ' . date('Y');

    $sm->assign("mes", $mesNome);
    
    $query = "SELECT financeiro.descricao,  financeiro.valor, financeiro.`DtPagamento`, financeiro.`idTipoMovimentacao`, categoriafinanceiro.nome as categoria, pessoa.nome as paciente "
            . "FROM financeiro LEFT JOIN categoriafinanceiro on (categoriafinanceiro.idcategoria = financeiro.idcategoria)"
            . "LEFT JOIN paciente ON (paciente.`idPaciente` = financeiro.`idPaciente`)"
            . "LEFT JOIN pessoa ON (pessoa.`idPessoa` = paciente.`idPessoa`)"
            . "WHERE DATE_FORMAT(`DtPagamento`, '%c') = " . $mes . " ORDER BY financeiro.`DtPagamento` ASC";
    $dados = $tratamentoDAO->selecao($query);

    for ($i = 0; $i < sizeof($dados); $i++) {
        $dados[$i]['DtPagamento'] = $config->date2BR(substr($dados[$i]['DtPagamento'], 0, 10));
        $dados[$i]['valor'] = round($dados[$i]['valor'], 2);
    }
    
    $sm->assign("dados", $dados);
    
    $entradas = $tratamentoDAO->selecaoTotalBalanco(1);
    $entrada = round($entradas[0]['valor'], 2);
    
    $sm->assign("entrada", $entrada);
    
    $saidas = $tratamentoDAO->selecaoTotalBalanco(2);
    $saida = round($saidas[0]['valor'], 2);
    
    $sm->assign("saida", $saida);
    
    $balancogeral = round(($entrada - $saida), 2);
    
    $sm->assign("balancogeral", $balancogeral);
    
    $entradasMes = $tratamentoDAO->selectTotalMes(1, $mes);
    $entradaMes = round($entradasMes[0]['valor'], 2);
    
    $sm->assign("entradaMes", $entradaMes);
    
    $saidasMes = $tratamentoDAO->selectTotalMes(2, $mes);
    $saidaMes = round($saidasMes[0]['valor'], 2);
    
    $sm->assign("saidaMes", $saidaMes);
    
    $totalMes = round(($entradaMes - $saidaMes), 2);
    $sm->assign("totalMes", $totalMes);

    $sm->display('financeiro.tpl');
}
//} else {
//    $query = 'SELECT * FROM financeiro';
//    $tratamentoDAO->selecao($query);
//
//    $sm->assign("mes", $mespt);
//
//    $sm->display("financeiro.tpl");
//}