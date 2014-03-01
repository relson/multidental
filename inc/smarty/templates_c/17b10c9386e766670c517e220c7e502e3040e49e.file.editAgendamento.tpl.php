<?php /* Smarty version Smarty-3.1.14, created on 2013-11-29 13:05:19
         compiled from "view\editAgendamento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170875298bb3f4a3a65-78871072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17b10c9386e766670c517e220c7e502e3040e49e' => 
    array (
      0 => 'view\\editAgendamento.tpl',
      1 => 1385741103,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170875298bb3f4a3a65-78871072',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nome' => 0,
    'idPaciente' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5298bb3f4d95a1_75962418',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5298bb3f4d95a1_75962418')) {function content_5298bb3f4d95a1_75962418($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Multi Dental</title>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="./css/style_agendamento.css" />
        <link type="text/css" rel="stylesheet" href="./inc/Formee/css/formee-style.css" />
        <link type="text/css" rel="stylesheet" href="./js/plugins/jQuery-ui/css/start/jquery-ui-start.css" />
        <link type="text/css" rel="stylesheet" href="./inc/Formee/css/formee-structure.css" />

        <script type="text/javascript" src="./js/lib/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="./js/plugins/jquery.maskedinput.min.js"></script>
        <script type="text/javascript" src="./js/plugins/jquery.validate.js"></script>
        <script type="text/javascript" src="./js/plugins/jQuery-ui/js/jquery.ui.datepicker-pt-BR.js"></script>
        <script type="text/javascript" src="./js/plugins/jQuery-ui/js/jquery-ui.js"></script>
        <script type="text/javascript" src="./js/plugins/jQuery-ui/js/jquery-ui.autocomplete.js"></script>
        <script type="text/javascript" src="./inc/Formee/js/formee.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#paciente').autocomplete({
                    source: "buscaDados.php",
                    minLength: 2
                });

                $('#datepicker').mask("99/99/9999");
                $('#telefone').mask("(99)9999-9999");

                $(function() {
                    $("#datepicker").datepicker();
                });

                $('#datepicker').change(function() {
                    $('#hora').load('agenda.php?data=' + $('#datepicker').val());
                });
            });
        </script>
    </head>
    <body>
        <div id="container">
            <form class="formee" id="frm_agendamento" method="post" enctype="multipart/form-data" target="_parent">
                <h3>Agendamento</h3>
                <hr />

                <div id="conteudo">
                    <div class="grid-11-12">
                        <label>Paciente: <em class="formee-req">*</em></label>
                        <input type="text" class="txt bradius" id="paciente" name="paciente" value="<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
" required />
                    </div>
                    <div class="grid-1-12" id="selecionarPaciente">
                        <a href="Agendamento.php?pac=true" data-fancybox-type="iframe"><img src="./css/image/add-paciente.png" width="32" height="32" alt="Selecionar Paciente" title="Selecionar Paciente" /></a>
                    </div>
                    <div class="grid-4-12">
                        <label>Tipo de Agendamento: <em class="formee-req">*</em></label>
                        <select class="txt bradius" name="tipoDeAgendamento" id="tipoDeAgendamento" required>
                            <option value="">[Selecione]</option>
                            <option value="Canal">Canal</option>
                            <option value="Consulta Inicial">Consulta Inicial</option>
                            <option value="Extracao">Extração</option>
                            <option value="Implante">Implante</option>
                            <option value="Limpeza">Limpeza</option>
                            <option value="Protese">Prótese</option>
                            <option value="Restauracao">Restauração</option>
                            <option value="Revisao">Revisão</option>
                        </select>
                    </div>
                    <div class="grid-4-12">
                        <label for="data">Data: <em class="formee-req">*</em></label>
                        <input type="text" class="txt bradius" name="datepicker" id="datepicker" required />
                    </div>
                    <div class="grid-4-12">
                        <label for="hora">Hora: <em class="formee-req">*</em></label>
                        <select name="hora" id="hora" class="txt bradius" required>
                            
                        </select>
                    </div>
                    <div class="grid-12-12">
                        <label for="observacao">Observação</label>
                        <textarea></textarea>
                    </div>
                </div><!-- conteudo -->
                <div id="botoes">
                    <a href="Agenda.php" class="cancel bradius" target="_parent">Cancelar</a>
                    <input type="reset" name="btn_reset" class="btn bradius" value="Limpar" />
                    <input type="submit" name="btn_cad" class="btn bradius" value="Salvar" />
                    <input type="hidden" name="idPaciente" value="<?php echo $_smarty_tpl->tpl_vars['idPaciente']->value;?>
" />
                    <input type="hidden" name="acao" value="salvar" />
                </div>
            </form>
        </div><!-- container -->
    </body>
</html>
<?php }} ?>