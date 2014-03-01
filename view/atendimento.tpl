{include file="view/header.tpl"}
{include file="view/menu.tpl"}

<div id="tabela">
    <div id="tabelamenu">
        <p>Atendimento - {$dia}</p>
    </div>
    <table>
        <tr id="rotulo">
            <td id="horario">Horário</td>
            <td id="prontuario">Prontuário</td>
            <td id="nome">Nome</td>
            <td id="observacao">Observação</td>
            <td id="atendido">Atendido</td>
{*            <td id="acao"><input type="checkbox" name="chkAll" onClick="checkAll(this);" /></td>*}
        </tr>
        {foreach from=$agendamentos item=linha}
        <tr onMouseOver="javascript:this.style.backgroundColor = '#d2d2d2'" onMouseOut="javascript:this.style.backgroundColor = ''">
            <td id="horario">{$linha.hora}:{$linha.minuto}</td>
            <td id="prontuario">{$linha.idPaciente}</td>
            <td id="nome"><a class="fancybox" data-fancybox-type="iframe" href="Paciente.php?pid={$linha.idPaciente}">{$linha.nome}</a></td>
            <td id="observacao">{if $linha.observacao == ''}Sem observação{else}{$linha.observacao}{/if}</td>
            <td id="atendido">Não</td>
{*            <td id="acao">
                <input type="checkbox" name="del[]" value="" />
            </td>*}
        </tr>
        {/foreach}
    </table>
</div><!-- ATENDIMENTO -->

{include file="view/footer.tpl"}