<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Multi Dental</title>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="./css/style_fancybox.css" />
    </head>
    <body>
        {foreach from=$p item=linha}
            <div id="container">
                <h3>PACIENTE</h3>
                <hr />
                <div id="conteudo">
                    <div id="foto"><img src="uploads/{$linha.foto}" height="170" width="150" alt="Foto Paciente" /></div>
                    <p>
                        <label for="prontuario" title="Prontuário">{$linha.prontuario}</label>
                    </p>
                    <p>
                        <label for="nome">{$linha.nome}</label>
                    </p>
                    <p>
                        <label for="idade">{$idade} anos</label>
                    </p>
                    <p>
                        <label for="contato">Contato: {$linha.telefone} <strong>/</strong> {$linha.celular}</label>
                    </p>
                    <p>
                        <label for="email">{$linha.email}</label>
                    </p>
                    <p>
                        <br />
                    <p id="obs">OBS:</p>
                    <textarea class="txt bradius" id="obs" rows="4" cols="55" disabled="">{*<!-- PROBLEMA -->*}</textarea>
                    </p>
                    <p>
                        <a class="btn bradius" href="Anamnese.php?pan={$linha.prontuario}" target="_parent">Anamnese</a>
                        <a class="btn bradius" href="Paciente.php?ped={$linha.prontuario}" target="_parent">Cadastro</a>
                        <a class="btn bradius" href="" {*target="_parent"*}>Documentação</a>
                        <a class="btn bradius" href="Exame.php?exa={$linha.prontuario}" target="_parent">Exame Físico</a>
                        <a class="btn bradius" href="Odontograma.php?pid={$linha.prontuario}" target="_parent">Odontograma</a>
                        <a class="btn bradius" href="Tratamento.php?ptr={$linha.prontuario}" target="_parent">Plano de Tratamento</a>
                    </p>
                </div><!-- end conteudo -->
            </div><!-- end container -->
        {/foreach}
    </body>
</html>
