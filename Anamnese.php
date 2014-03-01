<?php

include('./config/imports.php');
include('./config/sm.php');

$anamnese = new Anamnese();
$anamneseDAO = new AnamneseDAO();
$paciente = new PacienteDAO();
$pessoa = new Pessoa();

$sm->assign("usuario", 'Talita Lima');

if (isset($_POST['acao'])) {
    $acao = $_POST['acao'];

    switch ($acao) {
        case 'salvar':
            $anamnese->setIdPaciente($_POST['idPaciente']);
            $anamnese->setHistMedica($_POST['histMedica']);
            $anamnese->setHistFamiliar($_POST['histFamiliar']);
            $anamnese->setHistPessoal($_POST['histPessoal']);
            $anamnese->setHistOdontologica($_POST['histOdontologica']);

            $idAnamnese = $anamneseDAO->update($anamnese, $_POST['idAnamnese']);

            $p = $paciente->select($_POST['idPaciente']);
            $idade = $pessoa->getIdade($p[0]['dataNascimento']);

            $sm->assign("idade", $idade);
            $sm->assign("p", $p);

            $sm->display('view/posAnamnese.tpl');
            break;

        default:
            break;
    }
} else if (isset($_GET['pan'])) {
    $nome = $paciente->select($_GET['pan']);
    $sm->assign("nome", $nome[0]['nome']);
    $sm->assign("idPaciente", $_GET['pan']);

    $p = $anamneseDAO->select(null, $_GET['pan']);
    $sm->assign("p", $p);
    $sm->assign("anamnese", $p[0]['idAnamnese']);
    
    $sm->display('view/Anamnese.tpl');
} else {
    header('Location: ErrorPage.php');
}
