<?php /* Smarty version Smarty-3.1.14, created on 2014-03-01 09:33:04
         compiled from ".\view\agendamento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2694652825f77d1ad26-91702299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d0b1f3248f329d0f9a998a0e587268fcf92fdb0' => 
    array (
      0 => '.\\view\\agendamento.tpl',
      1 => 1393677024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2694652825f77d1ad26-91702299',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52825f77d84bb6_74862216',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52825f77d84bb6_74862216')) {function content_52825f77d84bb6_74862216($_smarty_tpl) {?><!DOCTYPE html>
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
                        <input type="text" class="txt bradius" id="paciente" name="paciente" required />
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
                        <textarea name="observacao" id="observacao"></textarea>
                    </div>
                </div><!-- conteudo -->
                <div id="botoes">
                    <a href="Agenda.php" class="cancel bradius" target="_parent">Cancelar</a>
                    <input type="reset" name="btn_reset" class="btn bradius" value="Limpar" />
                    <input type="submit" name="btn_cad" class="btn bradius" value="Salvar" />
                    <input type="hidden" name="idPaciente" value="" />
                    <input type="hidden" name="acao" value="salvar" />
                </div>
            </form>
        </div><!-- container -->
    </body>
</html>
<?php }} ?>