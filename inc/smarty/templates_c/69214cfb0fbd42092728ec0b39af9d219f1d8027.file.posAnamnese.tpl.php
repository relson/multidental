<?php /* Smarty version Smarty-3.1.14, created on 2013-11-27 09:56:47
         compiled from "view\posAnamnese.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2480652868f36cd89e2-57905667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69214cfb0fbd42092728ec0b39af9d219f1d8027' => 
    array (
      0 => 'view\\posAnamnese.tpl',
      1 => 1385557004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2480652868f36cd89e2-57905667',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52868f36e50e95_05857858',
  'variables' => 
  array (
    'p' => 0,
    'linha' => 0,
    'idade' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52868f36e50e95_05857858')) {function content_52868f36e50e95_05857858($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Multi Dental</title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="./css/image/favicon.png" />
        <link type="text/css" rel="stylesheet" href="./css/style_anamnese.css" />
    </head>
    <body>
        <div id="container">
            <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <?php  $_smarty_tpl->tpl_vars['linha'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linha']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['p']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['linha']->key => $_smarty_tpl->tpl_vars['linha']->value){
$_smarty_tpl->tpl_vars['linha']->_loop = true;
?>

                <div id="conteudo" class="bradius">
                    <h3>PACIENTE</h3>
                    <hr />
                    <div id="foto"><img src="uploads/<?php echo $_smarty_tpl->tpl_vars['linha']->value['foto'];?>
" height="170" width="150" alt="Foto Paciente" /></div>
                    <p>
                        <label for="prontuario" title="Prontuário"><?php echo $_smarty_tpl->tpl_vars['linha']->value['prontuario'];?>
</label>
                    </p>
                    <p>
                        <label for="nome"><?php echo $_smarty_tpl->tpl_vars['linha']->value['nome'];?>
</label>
                    </p>
                    <p>
                        <label for="idade"><?php echo $_smarty_tpl->tpl_vars['idade']->value;?>
 anos</label>
                    </p>
                    <p>
                        <label for="contato">Contato: <?php echo $_smarty_tpl->tpl_vars['linha']->value['telefone'];?>
 <strong>/</strong> <?php echo $_smarty_tpl->tpl_vars['linha']->value['celular'];?>
</label>
                    </p>
                    <p>
                        <label for="email"><?php echo $_smarty_tpl->tpl_vars['linha']->value['email'];?>
</label>
                    </p>
                    <p>
                        <br />
                    <p id="obs">OBS:</p>
                    <textarea class="txt bradius" id="obs" rows="4" cols="55" disabled=""></textarea>
                    </p>
                    <p>
                        <a class="btn bradius" href="Anamnese.php?pan=<?php echo $_smarty_tpl->tpl_vars['linha']->value['prontuario'];?>
" target="_parent">Anamnese</a>
                        <a class="btn bradius" href="Paciente.php?ped=<?php echo $_smarty_tpl->tpl_vars['linha']->value['prontuario'];?>
" target="_parent">Cadastro</a>
                        <a class="btn bradius" href="" >Documentação</a>
                        <a class="btn bradius" href="Exame.php?exa=<?php echo $_smarty_tpl->tpl_vars['linha']->value['prontuario'];?>
" target="_parent">Exame Físico</a>
                        <a class="btn bradius" href="Odontograma.php?pid=<?php echo $_smarty_tpl->tpl_vars['linha']->value['prontuario'];?>
" target="_parent">Odontograma</a>
                        <a class="btn bradius" href="Tratamento.php?ptr=<?php echo $_smarty_tpl->tpl_vars['linha']->value['prontuario'];?>
" target="_parent">Plano de Tratamento</a>
                    </p>
                </div><!-- end conteudo -->
            </div><!-- end container -->
        <?php } ?>
    </body>
</html>
<?php }} ?>