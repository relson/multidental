<?php

include('./config/imports.php');
include('./config/sm.php');

$horariosDAO = new HorariosDAO();
$agendamentoDAO = new AgendamentoDAO();
$sm->assign("usuario", 'Talita Lima');

if (isset($_GET['data'])) {
    $data = $_GET['data'];
    $hora = $agendamentoDAO->selectData($data);

    foreach ($hora as $row) {
        $horario[] = $row['horario'];
    }

    $hdisponivel = array($horariosDAO->selectHora($horario));

    echo '<option value="">[Selecione]</option>';
    foreach ($hdisponivel as $linha) {
        foreach ($linha as $row) {
            if ($row['minuto'] == 0){
                $hora = $row['hora'] . ':' . $row['minuto'] . '0';
            } else {
                $hora = $row['hora'] . ':' . $row['minuto'];
            }
            
            echo '<option value="' . $hora . '">' . $hora . '</option>';
        }
    }
} else {
    $horarios = $horariosDAO->select();
    $sm->assign("horarios", $horarios);

    $agendamentos = $agendamentoDAO->select();
    $sm->assign("dados", $agendamentos);

    $sm->display('view/agenda.tpl');
}    