<?php

require_once './config/imports.php';
require_once './config/sm.php';

$sm->assign("usuario", 'Talita Lima');

$sm->display('view/ErrorPage.tpl');

?>