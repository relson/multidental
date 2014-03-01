<?php /* Smarty version Smarty-3.1.14, created on 2013-11-22 15:10:17
         compiled from "view\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2389452825f766de042-19625579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26dec6f3580ea8d8486b5f64f679a1451b55f0ec' => 
    array (
      0 => 'view\\header.tpl',
      1 => 1385143816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2389452825f766de042-19625579',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52825f766eb111_21379587',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52825f766eb111_21379587')) {function content_52825f766eb111_21379587($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Multi Dental</title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="./css/image/favicon.png" />
        <link type="text/css" rel="stylesheet" href="./css/style.css" />
        <link type="text/css" rel="stylesheet" href="./js/plugins/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
        <link type="text/css" rel="stylesheet" href="./js/plugins/jQuery-ui/css/start/jquery-ui-start.css" />
        <link type="text/css" rel="stylesheet" href="./inc/Formee/css/formee-style.css" />
        <link type="text/css" rel="stylesheet" href="./inc/Formee/css/formee-structure.css" />
        
        <script type="text/javascript" src="./js/lib/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="./js/plugins/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
        <script type="text/javascript" src="./js/plugins/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
        <script type="text/javascript" src="./js/plugins/jquery.maskedinput.min.js"></script>
        <script type="text/javascript" src="./js/plugins/jquery.validate.js"></script>
        <script type="text/javascript" src="./js/plugins/jQuery-ui/js/jquery.ui.datepicker-pt-BR.js"></script>
        <script type="text/javascript" src="./js/plugins/jQuery-ui/js/jquery-ui.js"></script>
        <script type="text/javascript" src="./inc/Formee/js/formee.js"></script>

        <!--[if lte IE 8]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <script type="text/javascript">
            $(document).ready(function() {
                $(".fancybox").fancybox({
                    maxWidth: 800,
                    maxHeight: 600,
                    fitToView: false,
                    width: '490px',
                    height: '570px',
                    autoSize: false,
                    closeClick: false,
                    openEffect: 'fade',
                    closeEffect: 'fade'
                });

                $(".fancycam").fancybox({
                    maxWidth: 800,
                    maxHeight: 600,
                    fitToView: false,
                    width: '335px',
                    height: '410px',
                    autoSize: false,
                    closeClick: false,
                    openEffect: 'fade',
                    closeEffect: 'fade'
                });

                $(".tratamento").fancybox({
                    maxWidth: 800,
                    maxHeight: 600,
                    fitToView: false,
                    width: '500px',
                    height: '380px',
                    autoSize: false,
                    closeClick: false,
                    openEffect: 'fade',
                    closeEffect: 'fade'
                });

                $(".agendamento").fancybox({
                    maxWidth: 800,
                    maxHeight: 600,
                    fitToView: false,
                    width: '600px',
                    height: '480px',
                    autoSize: false,
                    closeClick: false,
                    openEffect: 'fade',
                    closeEffect: 'fade'
                });

                $("tr.click").click(function() {
                    $this = $(this);
                    $prontuario = $this.attr("rel");
                    alert($prontuario);
                });

                $('#dt_nascimento, #fromData, #toData').mask("99/99/9999");
                $('#cpf').mask("999.999.999-99");
                $('#cep').mask("99999-999");
                $('#telefone, #celular').mask("(99)9999-9999");

                $(function(){
                    $("#datepicker").datepicker();
                    $("#data").datepicker();
                    $("#toData").datepicker();
                    $("#fromData").datepicker();
                    $("#dt_nascimento").datepicker();
                });
            });

            function checkAll(o) {
                var boxes = document.getElementsByTagName("input");
                for (var x = 0; x < boxes.length; x++) {
                    var obj = boxes[x];
                    if (obj.type == "checkbox") {
                        if (obj.name != "chkAll")
                            obj.checked = o.checked;
                    }
                }
            }

            function confirmDel() {
                if (confirm('Deseja realmente excluir o paciente?')) {
                    document.delete_pacientes.submit();
                }
            }

            function confirmDelExames() {
                if (confirm('Deseja realmente excluir o exame?')) {
                    document.delete_exames.submit();
                }
            }

            function confirmDelTratamento() {
                if (confirm('Deseja realmente excluir o procedimento?')) {
                    document.delete_tratamento.submit();
                }
            }
        </script>
    </head>
    <body>
        <div id="container"><?php }} ?>