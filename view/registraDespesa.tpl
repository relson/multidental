<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Multi Dental</title>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="./css/registraDespesa.css"/>
        <link type="text/css" rel="stylesheet" href="./inc/Formee/css/formee-style.css"/>
        <link type="text/css" rel="stylesheet" href="./inc/Formee/css/formee-structure.css" />
        <link type="text/css" rel="stylesheet" href="./js/plugins/jQuery-ui/css/start/jquery-ui-start.css" />
        
    </head>
    <body>
        <div id="container" class="formee">
            <form method="post" action="Financeiro.php" enctype="multipart/form-data" target="_parent">
                <h3>Registrar Despesa</h3>
                <hr/>
                <div class="grid-8-12">
                    <label for="descricao">Descrição:</label>
                    <input type="text" class="txt bradius" name="descricao"/>
                </div>
                <div class="grid-4-12">
                    <label for="data">Data:</label>
                    <input type="text" class="txt bradius datepicker" name="data" id="data"/>
                </div>
                <div class="grid-8-12">
                    <label for="formapagamento">Forma de pagamento:</label>
                    <select class="txt bradius" name="formapagamento" id="formapagamento">
                        <option value="">Selecione</option>
                        {foreach from=$formas item=linha}
                            <option value="{$linha.idformapagamento}">{$linha.descricao}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="grid-4-12">
                    <label for="valorPago">Valor: R$</label>
                    <input type="text" class="txt bradius" name="valorPago"/>
                </div>

                <div>
                    <hr/>
                </div>
                <div id="botoes">
                    <a href="Financeiro.php" class="btn bradius" target="_parent">Cancelar</a>
                    <input type="submit" class="btn bradius" value="Salvar"/>
                    <input type="hidden" name="acao" value="registraDespesa"/>
                    <input type="hidden" name="paciente" value="{$paciente}"/>
                </div>
            </form>
        </div>

        <script type="text/javascript" src="./js/lib/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="../inc/Formee/js/formee.js"></script>
        <script type="text/javascript" src="./js/plugins/jQuery-ui/js/jquery.ui.datepicker-pt-BR.js"></script>
        <script type="text/javascript" src="./js/plugins/jquery.maskedinput.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.datepicker').mask("99/99/9999");
                $(function() {
                    $('.datepicker').datepicker();
                });

            });
        </script>
    </body>
</html>