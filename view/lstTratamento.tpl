{include file="view/header.tpl"}
{include file="view/menu.tpl"}

<div id="tabela">
    <form name="delete_tratamento" method="post">
        <div id="menuTratamento">
            <p>Plano de Tratamento - {$nome}</p>
            <input type="hidden" name="idPaciente" value="{$prontuario}" />
            <input type="button" value="Deletar Selecionados" class="btn btnAction bradius" onclick="confirmDelTratamento();" />
            <input type="button" value="Aprovar Orcamento" class="btn btnAction bradius" onclick="aprovaOrcamento();" />
            <a href="Tratamento.php?tid={$prontuario}" class="tratamento btn btnAction bradius" data-fancybox-type="iframe">Novo Procedimento</a>
            <label for="fromData">De</label>
            <input type="text" class="txt bradius" name="fromData" id="fromData" placeholder="__/__/____" />
            <label for="toData">até</label>
            <input type="text" class="txt bradius" name="toData" id="toData" placeholder="__/__/____" />
            <input type="image" src="css/image/search-icon.png" value="submit" width="20" height="20"/>
            <input type="image" src="css/image/printer-icon.png" width="20" height="20" value="imprimir" alt="Imprimir" title="Imprimir" onclick="" />
            <label id="filtrolabel" for="filtro">Filtrar procedimentos:</label>
            <select  class="txt bradius" name="filtro" id="filtro">
                <option value="">[Selecione uma opção]</option>
                <option value="">Procedimentos realizados</option>
                <option value="">Procedimentos em aberto</option>
                <option value="">Orçamento aprovado</option>
            </select>
        </div><!-- tabelamenu -->
        <table>
            <tr id="rotulo">
                <td id="data">Data</td>
                <td id="tratamentoProcedimento">Procedimento</td>
                <td id="tratamentoValor">Valor - R$</td>
                <td id="tratamentoAprovado">Orçamento Aprovado</td>
                <td id="tratamentoRealizado">Realizado</td>
                <td id="acao"><input type="checkbox" name="chkAll" onClick="checkAll(this);" /></td>
            </tr>
            {foreach from=$lstTratamento item=linha}
                <tr onMouseOver="javascript:this.style.backgroundColor = '#d2d2d2'" onMouseOut="javascript:this.style.backgroundColor = ''">
                    <td id="data">{$linha.data}</td>
                    <td id="tratamentoProcedimento">
                        <a href="Tratamento.php?ted={$prontuario}&tid={$linha.idTratamento}" class="tratamento" data-fancybox-type="iframe">
                            {$linha.procedimento}
                        </a>
                    </td>
                    <td id="tratamentoValor">{$linha.valor}</td>
                    <td id="tratamentoAprovado">{$linha.orcamentoAprovado}</td>
                    {*<td id="tratamentoFormaPagemento">{$linha.formaPagamento}</td>
                    <td id="tratamentoParcelameto">{$linha.parcelamento}</td>
                    <td id="tratamentoPaciente">{$nome}</td>
                    <td id="tratamentoDentista">Talita Lima Lula</td>*}
                    <td id="tratamentoRealizado">{$linha.realizado}</td>
                    <td id="acao">
                        <input type="checkbox" name="del[]" value="{$linha.idTratamento}" />
                    </td>
                </tr>
            {/foreach}
        </table>
    </form>

</div>

{include file="view/footer.tpl"}