<?php /* Smarty version Smarty-3.1.14, created on 2014-03-23 15:26:41
         compiled from "view\editTratamento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26715283ad5b8cb3a3-23526366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88472811a4375aa1c7c536d0ca645d8241536055' => 
    array (
      0 => 'view\\editTratamento.tpl',
      1 => 1395599193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26715283ad5b8cb3a3-23526366',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5283ad5b950742_49748824',
  'variables' => 
  array (
    'lstTratamento' => 0,
    'linha' => 0,
    'prontuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5283ad5b950742_49748824')) {function content_5283ad5b950742_49748824($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Multi Dental</title>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="./css/style_tratamento.css" />
        <link type="text/css" rel="stylesheet" href="./js/plugins/jQuery-ui/css/start/jquery-ui-start.css" />
        <link type="text/css" rel="stylesheet" href="./inc/Formee/css/formee-style.css" />
        <link type="text/css" rel="stylesheet" href="./inc/Formee/css/formee-structure.css" />

        <script type="text/javascript" src="./js/lib/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="./js/plugins/jquery.maskedinput.min.js"></script>
        <script type="text/javascript" src="./js/plugins/jquery.validate.js"></script>
        <script type="text/javascript" src="./inc/Formee/js/formee.js"></script>
        <script type="text/javascript" src="./js/plugins/jQuery-ui/js/jquery.ui.datepicker-pt-BR.js"></script>
        <script type="text/javascript" src="./js/plugins/jQuery-ui/js/jquery-ui.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#data').mask("99/99/9999");

                $(function() {
                    $("#data").datepicker();
                });
            });
        </script>
    </head>
    <body>
        <?php  $_smarty_tpl->tpl_vars['linha'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linha']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lstTratamento']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['linha']->key => $_smarty_tpl->tpl_vars['linha']->value){
$_smarty_tpl->tpl_vars['linha']->_loop = true;
?>
            <div id="container">
                <form class="formee" id="frm_tratamento" method="post" target="_parent">
                    <h3>Procedimento</h3>
                    <hr />
                    <div id="formTratamento">

                        <div class="grid-6-12">
                            <label>Procedimento:</label>
                            <input type="text" class="txt bradius" id="procedimento" name="procedimento" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['procedimento'];?>
" />
                        </div>
                        <div class="grid-6-12">
                            <label>Data Prevista:</label>
                            <input type="text" class="txt bradius" id="data" name="data" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['data'];?>
" />
                        </div>
                        <div class="grid-6-12">
                            <label>Valor - R$:</label>
                            <input type="text" class="txt bradius" id="valor" name="valor" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['valor'];?>
" />
                        </div>
                        
                                                
                        <div class="grid-6-12">
                            <label>Procedimento Realizado?</label>
                            <select class="txt bradius" name="realizado" id="realizado">
                                <option value="" <?php if ($_smarty_tpl->tpl_vars['linha']->value['realizado']==''){?>selected="selected"<?php }?>>[Escolha]</option>
                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['linha']->value['realizado']=="Sim"){?>selected="selected"<?php }?>>Sim</option>
                                <option value="0" <?php if ($_smarty_tpl->tpl_vars['linha']->value['realizado']=="Não"){?>selected="selected"<?php }?>>Não</option>
                                <option value="2" <?php if ($_smarty_tpl->tpl_vars['linha']->value['realizado']=="Em andamento"){?>selected="selected"<?php }?>>Em andamento</option>
                            </select>
                        </div>
                    </div>
                    <div id="botoes">
                        <a href="Tratamento.php?ptr=<?php echo $_smarty_tpl->tpl_vars['prontuario']->value;?>
" class="cancel bradius" target="_parent">Cancelar</a>
                        <input type="reset" name="btn_reset" class="btn bradius" value="Limpar" />
                        <input type="submit" name="btn_cad" class="btn bradius" value="Atualizar" />
                        <input type="hidden" name="acao" value="atualizar" />
                        <input type="hidden" name="paciente" value="<?php echo $_smarty_tpl->tpl_vars['prontuario']->value;?>
" />
                        <input type="hidden" name="tratamento" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['idTratamento'];?>
" />
                    </div>
                </form>
            </div><!-- container -->
        <?php } ?>
    </body>
</html>
<?php }} ?>