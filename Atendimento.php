<?php

require_once './config/imports.php';
require_once './config/sm.php';

$sm->assign("usuario", 'Talita Lima');

$agendamentoDAO = new AgendamentoDAO();
$data = date("d/m/Y");
//$data = date("12/11/2013");
$result = $agendamentoDAO->selectInnerData($data);

for ($i=0; $i < count($result); $i++) {
    if ($result[$i]['minuto'] == 0) {
        $result[$i]['minuto'] .= '0';
    }
}

$sm->assign("agendamentos", $result);
$sm->assign("dia", $data);
$sm->display("view/atendimento.tpl");