<?php /* Smarty version Smarty-3.1.14, created on 2014-03-30 10:48:17
         compiled from ".\view\lancarPagamento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9520533820a1be46b0-32073700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e266f587e49bf47c8ea331c9104055f88c428e4' => 
    array (
      0 => '.\\view\\lancarPagamento.tpl',
      1 => 1396187294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9520533820a1be46b0-32073700',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nome' => 0,
    'dados' => 0,
    'linha' => 0,
    'total' => 0,
    'idPaciente' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_533820a1c260f4_79068019',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533820a1c260f4_79068019')) {function content_533820a1c260f4_79068019($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Multi Dental</title>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="./css/style_lancamento.css" />
        <link type="text/css" rel="stylesheet" href="./js/plugins/jQuery-ui/css/start/jquery-ui-start.css" />
        <link type="text/css" rel="stylesheet" href="./inc/Formee/css/formee-style.css" />
        <link type="text/css" rel="stylesheet" href="./inc/Formee/css/formee-structure.css" />

    </head>
    <body>
        <div id="container">
                <h3>Registrar Pagamento</h3>
                <hr/>


                <div id="conteudo" class="formee">
                    <div id="nomePaciente" class="grid-12-12">
                        <label class="grid-3-12">Paciente:</label>
                        <input type="text" class="txt bradius" id="paciente" name="paciente" value="<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
"/>
                    </div>

                    <div class="grid-12-12 txtHint">
                        <table>
                            <tr id="rotulo">
                                <td id="data">Data</td>
                                <td id="servico">Serviço</td>
                                <td id="valor">Valor - R$</td>
                            </tr>
                            <?php  $_smarty_tpl->tpl_vars['linha'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linha']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['linha']->key => $_smarty_tpl->tpl_vars['linha']->value){
$_smarty_tpl->tpl_vars['linha']->_loop = true;
?>
                                <tr onMouseOver="javascript:this.style.backgroundColor = '#d2d2d2'" onMouseOut="javascript:this.style.backgroundColor = ''">
                                    <td id="data"><?php echo $_smarty_tpl->tpl_vars['linha']->value['DtCadastro'];?>
</td>
                                    <td id="servico"><a href="" data-fancybox-type="iframe"><?php echo $_smarty_tpl->tpl_vars['linha']->value['procedimento'];?>
</a></td>
                                    <td id="valor"><?php echo $_smarty_tpl->tpl_vars['linha']->value['valor'];?>
,00</td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <td id="total">TOTAL</td>
                                <td id="total"></td>
                                <td id="valorTotal"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
,00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div id="botoes">
                    <hr/>
                    <a href="Financeiro.php" class="cancel bradius" target="_parent">Cancelar</a>
                    <a href="Financeiro.php?idrp=<?php echo $_smarty_tpl->tpl_vars['idPaciente']->value;?>
"class="btn bradius">Registrar</a>
                    <input type="hidden" name="idPaciente" value="" />
                </div>
        </div>
        <script type="text/javascript" src="./js/lib/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="./js/plugins/jquery.maskedinput.min.js"></script>
        <script type="text/javascript" src="./js/plugins/jquery.validate.js"></script>
        <script type="text/javascript" src="./js/plugins/jQuery-ui/js/jquery.ui.datepicker-pt-BR.js"></script>
        <script type="text/javascript" src="./js/plugins/jQuery-ui/js/jquery-ui.js"></script>
        <script type="text/javascript" src="./inc/Formee/js/formee.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#data').mask("99/99/9999");
                //$('#valor').mask('9999,99');

                $(function() {
                    $("#data").datepicker();
                });
            });

            function showUser(str) {
                if (str == "") {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else { // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "../Financeiro.php?lp=" + str, true);
                xmlhttp.send();
            }
        </script>
    </body>
</html><?php }} ?>