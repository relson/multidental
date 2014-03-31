<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Multi Dental</title>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="./css/style_select_paciente.css" />
        <link type="text/css" rel="stylesheet" href="./inc/Formee/css/formee-style.css"/>
        <link type="text/css" rel="stylesheet" href="./inc/Formee/css/formee-structure.css"/>
    </head>
    <body>
        <div id="container" class="formee">
            <form method="post" action="Financeiro.php">
                <h3>Registrar Pagamento</h3>
                <hr />
                <div class="grid-12-12">
                    <label for="paciente">Paciente:</label>
                    {*<input type="text" class="txt bradius" id="pacientePagamento" name="pacientePagamento" required />*}
                    <select name="paciente" class="txt bradius">
                        <option value="">Selecione o Paciente</option>
                        {foreach from=$pacientes item=linha}
                            <option value="{$linha.prontuario}">{$linha.nome}</option>
                        {/foreach}
                    </select>
                </div>
                    <hr/>
                <div id="botoes">
                    <a href="Financeiro.php" class="btn bradius" target="_parent">Cancelar</a>
                    <button type="submit" class="btn bradius">Selecionar</button>
                    <input type="hidden" name="idP" value="idP"/>
                </div>
        </div><!-- container -->
    </form>

</body>
</html>
