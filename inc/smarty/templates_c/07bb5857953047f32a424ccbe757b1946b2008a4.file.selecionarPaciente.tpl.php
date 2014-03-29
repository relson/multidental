<?php /* Smarty version Smarty-3.1.14, created on 2014-03-24 21:02:42
         compiled from ".\view\selecionarPaciente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96995330c468d6c387-76775533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07bb5857953047f32a424ccbe757b1946b2008a4' => 
    array (
      0 => '.\\view\\selecionarPaciente.tpl',
      1 => 1395705693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96995330c468d6c387-76775533',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5330c468da9e24_16341739',
  'variables' => 
  array (
    'paciente' => 0,
    'linha' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5330c468da9e24_16341739')) {function content_5330c468da9e24_16341739($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Multi Dental</title>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="./css/style_select_paciente.css" />
    </head>
    <body>
        <div id="container">
                <h3>Pacientes</h3>
                <hr />

                <div id="conteudo">
                    <table>

                        <tr id="rotulo">
                            <td id="prontuario">Prontuário</td>
                            <td id="nome">Nome</td>
                        </tr>
                        <?php  $_smarty_tpl->tpl_vars['linha'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linha']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paciente']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['linha']->key => $_smarty_tpl->tpl_vars['linha']->value){
$_smarty_tpl->tpl_vars['linha']->_loop = true;
?>
                            <tr onMouseOver="javascript:this.style.backgroundColor = '#d2d2d2'" onMouseOut="javascript:this.style.backgroundColor = ''">
                                <td id="prontuario"><?php echo $_smarty_tpl->tpl_vars['linha']->value['prontuario'];?>
</td>
                                <td id="nome"><a href="Agendamento.php?pasel=<?php echo $_smarty_tpl->tpl_vars['linha']->value['prontuario'];?>
" data-fancybox-type="iframe"><?php echo $_smarty_tpl->tpl_vars['linha']->value['nome'];?>
</a></td>
                            </tr>
                        <?php } ?>
                    </table>
                    <div id="botao">
                        <a class="bradius btn" href="Agendamento.php">Voltar</a>
                        <a href="cadPaciente.php" class="btn bradius" target="_parent">Novo Paciente</a>
                    </div>
                </div><!-- conteudo -->
        </div><!-- container -->
    </body>
</html>
<?php }} ?>