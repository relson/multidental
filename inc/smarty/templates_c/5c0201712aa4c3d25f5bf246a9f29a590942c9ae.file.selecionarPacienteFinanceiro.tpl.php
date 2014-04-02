<?php /* Smarty version Smarty-3.1.14, created on 2014-03-30 21:38:44
         compiled from ".\view\selecionarPacienteFinanceiro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209145338b86a8d88d0-81421051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c0201712aa4c3d25f5bf246a9f29a590942c9ae' => 
    array (
      0 => '.\\view\\selecionarPacienteFinanceiro.tpl',
      1 => 1396226318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209145338b86a8d88d0-81421051',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5338b86a91d660_47528694',
  'variables' => 
  array (
    'pacientes' => 0,
    'linha' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5338b86a91d660_47528694')) {function content_5338b86a91d660_47528694($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Multi Dental</title>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="./css/style_select_paciente.css" />
        <link type="text/css" rel="stylesheet" href="./inc/Formee/css/formee-style.css"/>
        <link type="text/css" rel="stylesheet" href="./inc/Formee/css/formee-structure.css"/>
    </head>
    <body>
        <div id="container" class="formee">
            <form method="post" action="Financeiro.php">
                <h3>Registrar Pagamento</h3>
                <hr />
                <div class="grid-12-12">
                    <label for="paciente">Paciente:</label>
                    
                    <select name="paciente" class="txt bradius">
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
                </div>
                    <hr/>
                <div id="botoes">
                    <a href="Financeiro.php" class="btn bradius" target="_parent">Cancelar</a>
                    <button type="submit" class="btn bradius">Selecionar</button>
                    <input type="hidden" name="idP" value="idP"/>
                </div>
        </div><!-- container -->
    </form>

</body>
</html>
<?php }} ?>