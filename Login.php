<?php

include('./config/imports.php');
include('./config/sm.php');

$login = $_POST['login'];
$senha = $_POST['senha'];

if (isset($login) and $login != '') {
    
    if (isset($senha) and $senha != '') {
        
        if ($login == 'talitalima' and $senha == '12345') {
            
            $sm->assign("usuario", 'Talita Lima');
            $sm->display("view/agenda.tpl");
            
        } else {
            echo '<script>window.location="index.php";alert("Usu\u00e1rio ou Senha inv\u00e1lidos!");</script>';
        }
        
    } else {
        echo '<script>window.location="index.php";alert("Informe a senha!");</script>';
    }
    
} else {
    echo '<script>window.location="index.php";alert("Informe o nome de usuário!");</script>';
}
