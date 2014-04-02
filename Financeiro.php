<?php

require_once './config/imports.php';
require_once './config/sm.php';
require_once './config/Configs.php';

$sm->assign("usuario", 'Talita Lima');

$config = new Configs();
$pacienteDAO = new PacienteDAO();
$tratamentoDAO = new TratamentoDAO();
$financeiroDAO = new FinanceiroDAO();

$mes = date("M");
$mes_extenso = $config->mesExtenso();

$mespt = $mes_extenso[$mes] . '/' . date('Y');

if (isset($_POST['acao'])) {
    $acao = $_POST['acao'];
    
    switch ($acao) {
        case 'registraPagamento':
            
//            VALIDA E INSTANCIA OS DADOS PARA PERSISTIR NO BANCO
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

    for ($i = 0; $i < sizeof($dados); $i++) {
        $dados[$i]['DtCadastro'] = $config->date2BR(substr($dados[$i]['DtCadastro'], 0, 10));
    }

    $sm->assign("nome", $dados[0]['nome']);
    $sm->assign("dados", $dados);

    $sm->assign("total", $total[0]['total']);

    $sm->display('lancarPagamento.tpl');
    
} else if (isset($_GET['idrp'])) {
    $id = $_GET['idrp'];
    
    $dados = $tratamentoDAO->selectOrcamento($id);
    $total = $tratamentoDAO->selectTotal($id);
    $formas = $tratamentoDAO->selectFormaPagamento();
    $cartao = $tratamentoDAO->selectBandeiraCartao();
    
    $sm->assign("nome", $dados[0]['nome']);
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
    $sm->assign("mes", $mespt);

    $sm->display("financeiro.tpl");
}