<?php

include('./config/imports.php');
include('./config/sm.php');

$sm->assign("usuario", 'Talita Lima');

$paciente = new PacienteDAO();

if (isset($_GET['pid'])) {
    $idPaciente = $_GET['pid'];
    $nome = $paciente->select($idPaciente);
    $sm->assign("nome", $nome[0]['nome']);
    $sm->assign("idPaciente", $idPaciente);
    
    
    $sm->display('view/odontograma.tpl');
} else {
    header('Location: ErrorPage.php');
}