<?php

require_once './config/imports.php';
require_once './config/sm.php';

$sm->assign("usuario", 'Talita Lima');

$tratamento = new Tratamento();
$tratamentoDAO = new TratamentoDAO();
$paciente = new PacienteDAO();

if (isset($_POST['acao'])) {
    $acao = $_POST['acao'];

    switch ($acao) {
        case 'salvar':
            if (isset($_POST['data']) and isset($_POST['procedimento']) and isset($_POST['valor']) and isset($_POST['orcamento'])) {

                if ($_POST['data'] != '' and $_POST['procedimento'] != '' and $_POST['valor'] != '' and $_POST['orcamento'] != '') {
                    $idPaciente = $_POST['paciente'];

                    $tratamento->setIdPaciente($idPaciente);
                    $tratamento->setData($_POST['data']);
                    $tratamento->setProcedimento($_POST['procedimento']);
                    $tratamento->setValor($tratamento->convertValor($_POST['valor']));
                    $tratamento->setOrcamentoAprovado($_POST['orcamento']);
                    $tratamento->setRealizado($_POST['realizado']);

                    $tratamentoDAO->insert($tratamento);

                    //echo 'idPaciente: '.$tratamento->getIdPaciente().'<br /> Data: '.$tratamento->getData().'<br /> Procedimento: '.$tratamento->getProcedimento();

                    header('Location: Tratamento.php?ptr=' . $idPaciente);
                }
            }
            break;
        case 'atualizar':
            if (isset($_POST['data']) and isset($_POST['procedimento']) and isset($_POST['valor']) and isset($_POST['orcamento'])) {

                if ($_POST['data'] != '' and $_POST['procedimento'] != '' and $_POST['valor'] != '' and $_POST['orcamento'] != '') {
                    $idPaciente = $_POST['paciente'];
                    $idTratamento = $_POST['tratamento'];
                    
                    $tratamento->setIdPaciente($idPaciente);
                    $tratamento->setData($_POST['data']);
                    $tratamento->setProcedimento($_POST['procedimento']);
                    $tratamento->setValor($tratamento->convertValor($_POST['valor']));
                    $tratamento->setOrcamentoAprovado($_POST['orcamento']);
//                    $tratamento->setFormaPagamento($_POST['formaDePagamento']);
//                    if ($_POST['parcelamento'] == '') {
//                        $tratamento->setParcelamento('1');
//                    } else {
//                        $tratamento->setParcelamento($_POST['parcelamento']);
//                    }
                    $tratamento->setRealizado($_POST['realizado']);

                    $tratamentoDAO->update($tratamento, $idTratamento);

//                    echo 'idPaciente: '.$tratamento->getIdPaciente().'<br />Data: '.$tratamento->getData().'<br />Procedimento: '.$tratamento->getProcedimento().
//                         '<br />idTratamento: '.$idTratamento.'<br />Valor: '.$tratamento->getValor().'<br />Orçamento aprovado: '.$tratamento->getOrcamentoAprovado().
//                         '<br />Forma de pagamento: '.$tratamento->getFormaPagamento().'<br />Parcelas: '.$tratamento->getParcelamento().'<br />Realizado? '.$tratamento->getRealizado();

                    header('Location: Tratamento.php?ptr=' . $idPaciente);
                }
            }
            break;
        default:
            break;
    }
} else if (isset($_POST['del'])) {
    if (is_array($_POST['del'])) {
        foreach ($_POST['del'] as $id) {
            $tratamentoDAO->delete($id);
        }
    }

    $idPaciente = $_POST['idPaciente'];
    header('Location: Tratamento.php?ptr=' . $idPaciente);
} //pesquisa no banco
else if (isset($_POST['fromData']) and isset($_POST['toData']) and $_POST['fromData'] != '' and $_POST['toData'] != '') {
    $idPaciente = $_POST['idPaciente'];
    $from = $tratamento->getData2US($_POST['fromData']);
    $to = $tratamento->getData2US($_POST['toData']);

    $nome = $paciente->select($idPaciente);
    $pesquisa = $tratamentoDAO->search($idPaciente, $from, $to);

    $i = 0;
    foreach ($pesquisa as $valor) {
        $pesquisa[$i]['data'] = $tratamento->getData2BR($pesquisa[$i]['data']);
        $i++;
    }

    $sm->assign("nome", $nome[0]['nome']);
    $sm->assign("prontuario", $idPaciente);
    $sm->assign("lstTratamento", $pesquisa);

    $sm->display('view/lstTratamento.tpl');
} else if (isset($_GET['ptr']) or (isset($_POST['fromData']) and isset($_POST['toData']) and ($_POST['fromData'] == '' and $_POST['toData'] == ''))) {
    $idPaciente = $_GET['ptr'];
    $nome = $paciente->select($idPaciente);
    $sm->assign("nome", $nome[0]['nome']);
    $sm->assign("prontuario", $idPaciente);

    $lstTratamento = $tratamentoDAO->select($idPaciente);

    $i = 0;
    foreach ($lstTratamento as $valor) {
        $lstTratamento[$i]['data'] = $tratamento->date2BR($lstTratamento[$i]['data']);
        $i++;
    }

    $sm->assign("lstTratamento", $lstTratamento);

    $sm->display('view/lstTratamento.tpl');
} else if (isset($_GET['ted']) and (isset($_GET['tid']))) {
    $idPaciente = $_GET['ted'];
    $idTratamento = $_GET['tid'];
    $nome = $paciente->select($idPaciente);
    $sm->assign("nome", $nome[0]['nome']);
    $sm->assign("prontuario", $idPaciente);

    $lstTratamento = $tratamentoDAO->selectEdit($idTratamento, $idPaciente);
    $lstTratamento[0]['data'] = $tratamento->getData2BR($lstTratamento[0]['data']);

    $sm->assign("lstTratamento", $lstTratamento);

    $sm->display('view/editTratamento.tpl');
} else if (isset($_GET['tid'])) {
    $idPaciente = $_GET['tid'];
    $nome = $paciente->select($idPaciente);
    $sm->assign("nome", $nome[0]['nome']);
    $sm->assign("prontuario", $idPaciente);

    $sm->display('view/Tratamento.tpl');
} else {
    header('Location: ErrorPage.php');
}
?>