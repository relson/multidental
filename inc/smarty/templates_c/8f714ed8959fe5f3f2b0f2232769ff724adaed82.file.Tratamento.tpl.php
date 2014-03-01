<?php /* Smarty version Smarty-3.1.14, created on 2013-11-27 11:23:21
         compiled from "view\Tratamento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44285282a699b348e2-97917138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f714ed8959fe5f3f2b0f2232769ff724adaed82' => 
    array (
      0 => 'view\\Tratamento.tpl',
      1 => 1385562045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44285282a699b348e2-97917138',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5282a699b9d327_76729064',
  'variables' => 
  array (
    'prontuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5282a699b9d327_76729064')) {function content_5282a699b9d327_76729064($_smarty_tpl) {?><!DOCTYPE html>
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
        <script type="text/javascript" src="./js/plugins/jQuery-ui/js/jquery.ui.datepicker-pt-BR.js"></script>
        <script type="text/javascript" src="./js/plugins/jQuery-ui/js/jquery-ui.js"></script>
        <script type="text/javascript" src="./inc/Formee/js/formee.js"></script>
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
        <div id="container">
            <form class="formee" id="frm_tratamento" method="post" enctype="multipart/form-data" target="_parent">
                <h3>Procedimento</h3>
                <hr />
                <div id="formTratamento">

                    <div class="grid-12-12">
                        <label>Procedimento:</label>
                        <input type="text" class="txt bradius" id="procedimento" name="procedimento" required />
                    </div>
                    <div class="grid-6-12">
                        <label>Data Prevista:</label>
                        <input type="text" class="txt bradius" id="data" name="data" required />
                    </div>
                    <div class="grid-6-12">
                        <label>Valor - R$:</label>
                        <input type="text" class="txt bradius" id="valor" name="valor" required />
                    </div>
                    <div class="grid-6-12">
                        <label>Orçamento aprovado:</label>
                        <select class="txt bradius" name="orcamento" id="orcamento" required>
                            <option value="">[Escolha]</option>
                            <option value="Sim">Sim</option>
                            <option value="Não" selected="selected">Não</option>
                        </select>
                    </div>
                    <div class="grid-6-12">
                        <label>Procedimento Realizado?</label>
                        <select class="txt bradius" name="realizado" id="realizado" required>
                            <option value="">[Escolha]</option>
                            <option value="Sim">Sim</option>
                            <option value="Não" selected="selected">Não</option>
                            <option value="Em andamento">Em anadamento</option>
                        </select>
                    </div>
                </div>
                <div id="botoes">
                    <a href="Tratamento.php?ptr=<?php echo $_smarty_tpl->tpl_vars['prontuario']->value;?>
" class="cancel bradius" target="_parent">Cancelar</a>
                    <input type="reset" name="btn_reset" class="btn bradius" value="Limpar" />
                    <input type="submit" name="btn_cad" class="btn bradius" value="Salvar" />
                    <input type="hidden" name="acao" value="salvar" />
                    <input type="hidden" name="paciente" value="<?php echo $_smarty_tpl->tpl_vars['prontuario']->value;?>
" />
                </div>
            </form>
        </div><!-- container -->
    </body>
</html>
<?php }} ?>