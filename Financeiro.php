<?php

require_once './config/imports.php';
require_once './config/sm.php';
require_once './config/Configs.php';

$sm->assign("usuario", 'Talita Lima');

$config = new Configs();

$mes = date("M");
$mes_extenso = $config->mesExtenso();

$mespt =  $mes_extenso[$mes].'/'.date('Y');

$sm->assign("mes", $mespt);

$sm->display("financeiro.tpl");