{include file="view/header.tpl"}
{include file="view/menu.tpl"}


<div id="tabela">
    <form name="delete_pacientes" method="post">
        <div id="tabelamenu">
            <p>Pacientes</p>

            <input type="button" value="Deletar Selecionados" class="btn btnAction bradius" onclick="confirmDel();" />
            <a href="cadPaciente.php" class="btn btnAction bradius">Novo Paciente</a>
            <input type="text" class="txt bradius" name="pesquisa" id="pesquisa" placeholder="Pesquisar paciente" />
            <input type="image" src="css/image/search-icon.png" value="submit" width="20" height="20"/>

        </div>
        <table>
            <tr id="rotulo">
                <td id="prontuario">Prontuário</td>
                <td id="nome">Nome</td>
                <td id="convenio">Convênio</td>
                <td id="telefone">Telefone</td>
                <td id="acao"><input type="checkbox" name="chkAll" onClick="checkAll(this);" /></td>
            </tr>
            {foreach from=$lstPaciente item=linha}
                <tr onMouseOver="javascript:this.style.backgroundColor = '#d2d2d2'" onMouseOut="javascript:this.style.backgroundColor = ''">
                    <td id="prontuario">{$linha.prontuario}</td>
                    <td id="nome"><a class="fancybox" data-fancybox-type="iframe" href="Paciente.php?pid={$linha.prontuario}">{$linha.nome}</a></td>
                    <td id="convenio">{$linha.convenio}</td>
                    <td id="telefone">{$linha.telefone}</td>
                    <td id="acao">
                        <input type="checkbox" name="del[]" value="{$linha.prontuario}" />
                    </td>
                </tr>
            {/foreach}
        </table>
    </form>
</div><!--tabela-->

<ul class="results">
</ul>
{include file="view/footer.tpl"}