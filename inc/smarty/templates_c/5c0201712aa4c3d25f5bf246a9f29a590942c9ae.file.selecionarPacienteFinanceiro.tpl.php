<?php /* Smarty version Smarty-3.1.14, created on 2014-03-29 16:00:56
         compiled from ".\view\selecionarPacienteFinanceiro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:272305336fb0bbdd693-35555837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c0201712aa4c3d25f5bf246a9f29a590942c9ae' => 
    array (
      0 => '.\\view\\selecionarPacienteFinanceiro.tpl',
      1 => 1396119653,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '272305336fb0bbdd693-35555837',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5336fb0bc1d976_80568399',
  'variables' => 
  array (
    'pacientes' => 0,
    'linha' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5336fb0bc1d976_80568399')) {function content_5336fb0bc1d976_80568399($_smarty_tpl) {?><!DOCTYPE html>
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
                <div class="grid-6-12">
                    <form method="post" action="Financeiro.php">
                        <label>Paciente:</label>
                        
                        <select name="paciente">
                            <option value="">Selecione o Paciente</option>
                            <?php  $_smarty_tpl->tpl_vars['linha'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linha']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pacientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['linha']->key => $_smarty_tpl->tpl_vars['linha']->value){
$_smarty_tpl->tpl_vars['linha']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['prontuario'];?>
"><?php echo $_smarty_tpl->tpl_vars['linha']->value['nome'];?>
</option>
                            <?php } ?>
                        </select>

                        <a href="Financeiro.php" class="btn bradius" target="_parent">Cancelar</a>
                        <button type="submit" class="btn bradius">Selecionar</button>
                        <input type="hidden" name="idP" value="idP"/>
                    </form>
                </div>
            </div><!-- conteudo -->
        </div><!-- container -->
    </body>
</html>
<?php }} ?>