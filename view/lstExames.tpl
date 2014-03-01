{include file="view/header.tpl"}
{include file="view/menu.tpl"}

<div id="tabela">
    <form name="delete_exames" method="post">
        <div id="tabelamenu">
            <p>Exames - {$nome}</p>
            <input type="button" value="Deletar Selecionados" class="btn btnAction bradius" onclick="confirmDelExames();" />
            <input type="hidden" name="idPaciente" value="{$prontuario}" />
            <a href="Exame.php?nexa={$prontuario}" class="btn btnAction bradius">Novo Exame</a>
            <input type="text" class="txt bradius" name="pesquisa" id="pesquisa" placeholder="Pesquisar exame" />
            <input type="image" src="css/image/search-icon.png" width="20" height="20" value="submit" />
        </div>
        <table>
            <tr id="rotulo">
                <td id="data">Data</td>
                <td id="td_exameNome">Exame</td>
                <td id="acao"><input type="checkbox" name="chkAll" onClick="checkAll(this);" /></td>
            </tr>
            {$i=1}
            {foreach from=$lstExames item=linha}
                <tr onMouseOver="javascript:this.style.backgroundColor = '#d2d2d2'" onMouseOut="javascript:this.style.backgroundColor = ''">
                    <td id="data">{$linha.dataExame}</td>
                    <td id="td_exameNome">
                        <a href="Exame.php?exa={$prontuario}&ed={$linha.idExames}">Exame Físico {if $linha.idExames < 10}0{/if}{$i}</a>
                    </td>
                    <td id="acao">
                        <input type="checkbox" name="del[]" value="{$linha.idExames}" />
                    </td>
                </tr>
                {$i = $i + 1}
            {/foreach}
        </table>
    </form>
</div> <!-- tabela -->

{include file="view/footer.tpl"}