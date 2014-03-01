<?php /* Smarty version Smarty-3.1.14, created on 2014-03-01 09:35:20
         compiled from ".\view\editAgendamento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157235287c32d5d80d7-25340722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a96b0715abc92266cbc0e49e7aefeea561c7e384' => 
    array (
      0 => '.\\view\\editAgendamento.tpl',
      1 => 1393677316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157235287c32d5d80d7-25340722',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5287c32d745ba6_20759638',
  'variables' => 
  array (
    'agendamento' => 0,
    'nome' => 0,
    'linha' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5287c32d745ba6_20759638')) {function content_5287c32d745ba6_20759638($_smarty_tpl) {?><!DOCTYPE html>
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

                <?php  $_smarty_tpl->tpl_vars['linha'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linha']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['agendamento']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['linha']->key => $_smarty_tpl->tpl_vars['linha']->value){
$_smarty_tpl->tpl_vars['linha']->_loop = true;
?>
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
                                <option value="Canal" <?php if ($_smarty_tpl->tpl_vars['linha']->value['tipoagendamento']=='Canal'){?> selected="selected" <?php }?>>Canal</option>
                                <option value="Consulta Inicial" <?php if ($_smarty_tpl->tpl_vars['linha']->value['tipoagendamento']=='Consulta Inicial'){?> selected="selected" <?php }?>>Consulta Inicial</option>
                                <option value="Extracao" <?php if ($_smarty_tpl->tpl_vars['linha']->value['tipoagendamento']=='Extracao'){?> selected="selected" <?php }?>>Extração</option>
                                <option value="Implante" <?php if ($_smarty_tpl->tpl_vars['linha']->value['tipoagendamento']=='Implante'){?> selected="selected" <?php }?>>Implante</option>
                                <option value="Limpeza" <?php if ($_smarty_tpl->tpl_vars['linha']->value['tipoagendamento']=='Limpeza'){?> selected="selected" <?php }?>>Limpeza</option>
                                <option value="Protese" <?php if ($_smarty_tpl->tpl_vars['linha']->value['tipoagendamento']=='Protese'){?> selected="selected" <?php }?>>Prótese</option>
                                <option value="Restauracao" <?php if ($_smarty_tpl->tpl_vars['linha']->value['tipoagendamento']=='Restauracao'){?> selected="selected" <?php }?>>Restauração</option>
                                <option value="Revisao" <?php if ($_smarty_tpl->tpl_vars['linha']->value['tipoagendamento']=='Revisao'){?> selected="selected" <?php }?>>Revisão</option>
                            </select>
                        </div>
                        <div class="grid-4-12">
                            <label for="data">Data: <em class="formee-req">*</em></label>
                            <input type="text" class="txt bradius" name="datepicker" id="datepicker" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['data'];?>
" required />
                        </div>
                        <div class="grid-4-12">
                            <label for="hora">Hora: <em class="formee-req">*</em></label>
                            <select name="hora" id="hora" class="txt bradius" required>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['hora'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['linha']->value['hora'];?>
</option>
                            </select>
                        </div>
                        <div class="grid-12-12">
                            <label for="observacao">Observação</label>
                            <textarea name="observacao" id="observacao"><?php echo $_smarty_tpl->tpl_vars['linha']->value['observacao'];?>
</textarea>
                        </div>
                    </div><!-- conteudo -->
                    <div id="botoes">
                        <a href="Agenda.php" class="cancel bradius" target="_parent">Cancelar</a>
                        <input type="reset" name="btn_reset" class="btn bradius" value="Limpar" />
                        <input type="submit" name="btn_cad" class="btn bradius" value="Atualizar" />
                        <input type="hidden" name="idAgendamento" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
                        <input type="hidden" name="acao" value="atualizar" />
                    </div>
                </form>
            </div><!-- container -->
        <?php } ?>
    </body>
</html>
<?php }} ?>