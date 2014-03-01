<?php

require_once './config/imports.php';
require_once './config/sm.php';

$sm->assign("usuario", 'Talita Lima');

$estados = new EstadosDAO();

//lista de estados
$lista = $estados->select();
$sm->assign("lista", $lista);

$sm->display('view/cadPaciente.tpl');
?>
