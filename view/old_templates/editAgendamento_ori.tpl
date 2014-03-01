<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Multi Dental</title>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="./css/style_agendamento.css" />
        <script type="text/javascript" src="./js/lib/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="./js/plugins/jquery.maskedinput.min.js"></script>
        <script type="text/javascript" src="./js/plugins/jquery.validate.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#data').mask("99/99/9999");
                $('#telefone').mask("(99)9999-9999");
            });
        </script>
    </head>
    <body>
        <div id="container">
            {foreach from=$agendamento item=linha}
                <form id="frm_agendamento" action="Agendamento.php" method="post" enctype="multipart/form-data" target="_parent">
                    <h3>Agendamento</h3>
                    <hr />

                    <div id="conteudo">
                        <p><label>Paciente:</label></p>
                        <input type="text" class="txt bradius" id="paciente" name="paciente" value="{$linha.paciente}" />
                        <p>
                            <label>Tipo de Agendamento:</label>
                            <select name="tipoAgendamento" id="tipoAgendamento" class="txt bradius">
                                <option value="" {if $linha.tipoagendamento == ''}selected="selected"{/if}>[Selecione]</option>
                                <option value="Canal" {if $linha.tipoagendamento == 'Canal'}selected="selected"{/if}>Canal</option>
                                <option value="Consulta_Inicial" {if $linha.tipoagendamento == 'Consulta Inicial'}selected="selected"{/if}>Consulta Inicial</option>
                                <option value="Extracao" {if $linha.tipoagendamento == 'Extracao'}selected="selected"{/if}>Extração</option>
                                <option value="Limpeza" {if $linha.tipoagendamento == 'Limpeza'}selected="selected"{/if}>Limpeza</option>
                                <option value="Protese" {if $linha.tipoagendamento == 'Protese'}selected="selected"{/if}>Prótese</option>
                                <option value="Restauracao" {if $linha.tipoagendamento == 'Restauracao'}selected="selected"{/if}>Restauração</option>
                                <option value="Revisao" {if $linha.tipoagendamento == 'Revisao'}selected="selected"{/if}>Revisão</option>
                            </select>
                        </p>
                        <p><label for="telefone">Telefone:</label></p>
                        <input type="text" class="txt bradius" id="telefone" name="telefone" value="{$linha.telefone}" />
                        <p><label for="email">Email:</label></p>
                        <input type="text" class="txt bradius" id="email" name="email" value="{$linha.email}" />
                        <p><label for="data">Data:</label></p>
                        <input type="text" class="txt bradius" id="data" name="data" value="{$linha.data}" />
                        <p>
                            <label for="hora">Hora:</label>
                            <select name="hora" id="hora" class="txt bradius">
                                {foreach from=$horarios item=row}
                                    <option value="{$row.hora}" {if $linha.hora == $row.hora}selected="selected"{/if}>{$row.hora}</option>
                                {/foreach}
                            </select>
                        </p>
                        <div id="botoes">
                            <a href="Agenda.php" class="cancel bradius" target="_parent">Cancelar</a>
                            <input type="submit" name="btn_cad" class="btn bradius" value="Salvar" />
                            <input type="hidden" name="id" value="{$id}" />
                            <input type="hidden" name="acao" value="atualizar" />
                        </div>
                    </div><!-- conteudo -->
                {/foreach}
            </form>
        </div><!-- container -->
    </body>
</html>
