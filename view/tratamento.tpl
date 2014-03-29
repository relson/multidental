<!DOCTYPE html>
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
                //$('#valor').mask('9999,99');

                $(function() {
                    $("#data").datepicker();
                });
            });
        </script>
    </head>
    <body>
        <div id="container">
            <form class="formee" id="frm_tratamento" method="post" action="Tratamento.php" target="_parent">
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
                    {*<div class="grid-6-12">
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
                    </div>*}
                </div>
                <div id="botoes">
                    <a href="Tratamento.php?ptr={$prontuario}" class="cancel bradius" target="_parent">Cancelar</a>
                    <input type="reset" name="btn_reset" class="btn bradius" value="Limpar" />
                    <input type="submit" name="btn_cad" class="btn bradius" value="Salvar" />
                    <input type="hidden" name="acao" value="salvar" />
                    <input type="hidden" name="paciente" value="{$prontuario}" />
                </div>
            </form>
        </div><!-- container -->
    </body>
</html>
