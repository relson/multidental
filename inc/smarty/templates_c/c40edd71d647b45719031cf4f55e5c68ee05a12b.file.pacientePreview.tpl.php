<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 21:01:34
         compiled from "view\pacientePreview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:303525282677912ec51-01120575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c40edd71d647b45719031cf4f55e5c68ee05a12b' => 
    array (
      0 => 'view\\pacientePreview.tpl',
      1 => 1384300890,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303525282677912ec51-01120575',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5282677918b8f8_72060339',
  'variables' => 
  array (
    'p' => 0,
    'linha' => 0,
    'idade' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5282677918b8f8_72060339')) {function content_5282677918b8f8_72060339($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Multi Dental</title>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="./css/style_fancybox.css" />
    </head>
    <body>
        <?php  $_smarty_tpl->tpl_vars['linha'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linha']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['p']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['linha']->key => $_smarty_tpl->tpl_vars['linha']->value){
$_smarty_tpl->tpl_vars['linha']->_loop = true;
?>
            <div id="container">
                <h3>PACIENTE</h3>
                <hr />
                <div id="conteudo">
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