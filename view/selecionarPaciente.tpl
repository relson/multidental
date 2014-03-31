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
                    <table>

                        <tr id="rotulo">
                            <td id="prontuario">Prontuário</td>
                            <td id="nome">Nome</td>
                        </tr>
                        {foreach from=$paciente item=linha}
                            <tr onMouseOver="javascript:this.style.backgroundColor = '#d2d2d2'" onMouseOut="javascript:this.style.backgroundColor = ''">
                                <td id="prontuario">{$linha.prontuario}</td>
                                <td id="nome"><a href="Agendamento.php?pasel={$linha.prontuario}" data-fancybox-type="iframe">{$linha.nome}</a></td>
                            </tr>
                        {/foreach}
                    </table>
                    <div id="botao">
                        <a class="bradius btn" href="Agendamento.php">Voltar</a>
                        <a href="cadPaciente.php" class="btn bradius" target="_parent">Novo Paciente</a>
                    </div>
                </div><!-- conteudo -->
        </div><!-- container -->
    </body>
</html>
