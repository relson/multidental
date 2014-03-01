<?php

include('./config/imports.php');
include('./config/sm.php');

$agendamento = new Agendamento();
$agendamentoDAO = new AgendamentoDAO();
$agenda = new HorariosDAO();
$pacienteDAO = new PacienteDAO();

$sm->assign("usuario", 'Talita Lima');

if (isset($_POST['acao'])) {
    $acao = $_POST['acao'];

    switch ($acao) {
        case 'salvar':

            if (isset($_POST['paciente']) and isset($_POST['tipoDeAgendamento']) and isset($_POST['datepicker']) and isset($_POST['hora'])) {
               
                if ($_POST['paciente'] != '' and $_POST['tipoDeAgendamento'] != '' and $_POST['datepicker'] != '' and $_POST['hora'] != '') {

                    $agendamento->setidPaciente($_POST['idPaciente']);
                    $agendamento->setTipoagendamento($_POST['tipoDeAgendamento']);
                    $agendamento->setData($_POST['datepicker']);
                    $agendamento->setHora($_POST['hora']);
                    $agendamento->setObservacao($_POST['observacao']);

                    $agendamentoDAO->insert($agendamento);
                  
                    header('Location: Agenda.php');
                }
            }

            break;
        case 'atualizar':

            if (isset($_POST['paciente']) and isset($_POST['tipoDeAgendamento']) and isset($_POST['datepicker']) and $_POST['hora']) {

                if ($_POST['paciente'] != '' and $_POST['tipoDeAgendamento'] != '' and $_POST['datepicker'] != '' and $_POST['hora'] != '') {
                    $idagendamento = $_POST['idAgendamento'];

                    $agendamento->setTipoagendamento($_POST['tipoDeAgendamento']);
                    $agendamento->setData($_POST['datepicker']);
                    $agendamento->setHora($_POST['hora']);
                    $agendamento->setObservacao($_POST['observacao']);
                    $agendamentoDAO->update($agendamento, $idagendamento);
                    
                    header('Location: Agenda.php');
                }
            }

            break;
        default :
            break;
    }
//edit agendamento
} else if (isset($_GET['edag'])) {
    $idagendamento = $_GET['edag'];
    $sm->assign("id", $idagendamento);
    
    $dados = $agendamentoDAO->selectEdit($idagendamento);
    
    $dados[0]['data'] = $agendamento->date2BR($dados[0]['data']);

    $idPaciente = $dados[0]['idPaciente'];
    $paciente = $pacienteDAO->select($idPaciente);
    
    $nome = $paciente[0]['nome'];
    $sm->assign("nome", $nome);
    
    $sm->assign("agendamento", $dados);
    
    $sm->display('editAgendamento.tpl');

  //pesquisar paciente para agendar
} else if (isset ($_GET['pac']) and $_GET['pac']) {
    $paciente = $pacienteDAO->selectInner();
    $sm->assign("paciente", $paciente);
    
    $sm->display("selecionarPaciente.tpl");
    
// pasel = paciente selected
} else if (isset ($_GET['pasel'])) { 
    $idPaciente = $_GET['pasel'];
    $sm->assign("idPaciente", $idPaciente);
    
    $nome = $pacienteDAO->select($idPaciente);
    $sm->assign('nome', $nome[0]['nome']);
    
    $sm->display('view/continuaAgendamento.tpl');
} else {
    $horarios = $agenda->select();
    $sm->assign("horarios", $horarios);

    $sm->display('agendamento.tpl');
}