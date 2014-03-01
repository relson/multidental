<!--<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Multi Dental</title>
        <meta charset="UTF-8">
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="css/image/favicon.png" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <div id="container">
            <div id="formlogin" class="bradius">
                <img src="css/image/logo.jpg" alt="MultiDental" title="MultiDental" />
                <form action="" method="post">
                    <input type="text" class="txt bradius" id="login" name="login" placeholder="Login" />
                    <input type="password" class="txt bradius" id="senha" name="senha" placeholder="Senha" />
                    <input type="submit" name="btn_login"  class="btn bradius" value="Entrar" />
                    <a class="link" href="">Esqueceu sua senha?</a>
                </form>
            </div>formlogin
        </div>container
    </body>
</html>-->

<?php

include('./config/imports.php');
include('./config/sm.php');

$sm->display("view/login.tpl");
