<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Multi Dental</title>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="./css/style_select_paciente.css" />
    </head>
    <body>
        <div id="container">
            <h3>Pacientes</h3>
            <hr />

            <div id="conteudo">
                <div class="grid-6-12">
                    <form method="post" action="Financeiro.php">
                        <label>Paciente:</label>
                        {*<input type="text" class="txt bradius" id="pacientePagamento" name="pacientePagamento" required />*}
                        <select name="paciente">
                            <option value="">Selecione o Paciente</option>
                            {foreach from=$pacientes item=linha}
                                <option value="{$linha.prontuario}">{$linha.nome}</option>
                            {/foreach}
                        </select>

                        <a href="Financeiro.php" class="btn bradius" target="_parent">Cancelar</a>
                        <button type="submit" class="btn bradius">Selecionar</button>
                        <input type="hidden" name="idP" value="idP"/>
                    </form>
                </div>
            </div><!-- conteudo -->
        </div><!-- container -->
    </body>
</html>
