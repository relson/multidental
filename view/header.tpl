<!DOCTYPE html>
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
                    height: '300px',
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
                
                $('.lancaPagamento').fancybox({
                    maxWidth: 800,
                    maxHeight: 600,
                    fitToView: false,
                    autoSize: false,
                    closeClick: false,
                    openEffect: 'fade',
                    closeEffect: 'fade',
                    width: '500px',
                    padding: '0'
                });
                
                $('.lancaDespesa').fancybox({
                    maxWidth: 800,
                    maxHeight: 600,
                    fitToView: false,
                    autoSize: false,
                    closeClick: false,
                    openEffect: 'fade',
                    closeEffect: 'fade',
                    width: '505px',
                    padding: '0'
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
            
            function aprovaOrcamento() {
                document.aprova_orcamento.submit();
            }
        </script>
    </head>
    <body>
        <div id="container">