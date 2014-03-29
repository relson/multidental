<!DOCTYPE html>
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
                        <input type="text" class="txt bradius" id="paciente" name="paciente" value="{$nome}"/>
                    </div>

                    <div class="grid-12-12 txtHint">

                        <table>

                            <tr id="rotulo">
                                <td id="data">Data</td>
                                <td id="servico">Serviço</td>
                                <td id="valor">Valor - R$</td>
                            </tr>
                            {foreach from=$dados item=linha}
                                <tr onMouseOver="javascript:this.style.backgroundColor = '#d2d2d2'" onMouseOut="javascript:this.style.backgroundColor = ''">
                                    <td id="data">{$linha.DtCadastro}</td>
                                    <td id="servico"><a href="" data-fancybox-type="iframe">{$linha.procedimento}</a></td>
                                    <td id="valor">{$linha.valor},00</td>
                                </tr>
                            {/foreach}
                            <tr>
                                <td id="total">TOTAL</td>
                                <td id="total"></td>
                                <td id="valorTotal">{$total},00</td>
                            </tr>
                        </table>

                    </div>
                </div>
                <div id="botoes">
                    <hr/>
                    <a href="Financeiro.php" class="cancel bradius" target="_parent">Cancelar</a>
                    <input type="submit" name="btn_cad" class="btn bradius" value="Registrar" />
                    <input type="hidden" name="idPaciente" value="{*{$linha.prontuario}*}" />
                    <input type="hidden" name="acao" value="registrar" />
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
</html>