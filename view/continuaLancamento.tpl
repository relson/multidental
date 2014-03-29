<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Multi Dental</title>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="../css/style_lacamento.css" />
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
                //$('#valor').mask('9999,99');

                $(function() {
                    $("#data").datepicker();
                });
            });
        </script>
    </head>
    <body>
        <div id="container">
            <form class="formee" method="post" action="../Financeiro.php" target="_parent">
                <h3>Lançar Pagamento</h3>
                <hr/>

                <div id="">

                    <div class="grid-11-12">
                        <label>Paciente:</label>
                        <input type="text" class="txt bradius" id="pacientePagamento" name="pacientePagamento" value="{$nome}" required />
                    </div>
                    <div class="grid-1-12" id="selecionarPaciente">
                        <a href="Financeiro.php?pac=true" data-fancybox-type="iframe"><img src="./css/image/add-paciente.png" width="32" height="32" alt="Selecionar Paciente" title="Selecionar Paciente" /></a>
                    </div>

                    <div class="grid-12-12">

                        <table>

                            <tr id="rotulo">
                                <td id="data">Data</td>
                                <td id="servico">Serviço</td>
                                <td id="valor">Valor - R$</td>
                            </tr>
                            {foreach from=$orcamento item=linha}
                                <tr onMouseOver="javascript:this.style.backgroundColor = '#d2d2d2'" onMouseOut="javascript:this.style.backgroundColor = ''">
                                    <td id="data"></td>
                                    <td id="servico"><a href="" data-fancybox-type="iframe"></a></td>
                                    <td id="valor"></td>
                                </tr>
                            {/foreach}
                            <tr>
                                <td id="total">TOTAL</td>
                                <td id="total"></td>
                                <td id="valorTotal"></td>
                            </tr>
                        </table>

                    </div>

                </div>

        </div>

    </form>
</div>
</body>
</html>