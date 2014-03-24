{include file="view/header.tpl"}
{include file="view/menu.tpl"}

<div id="tabela">
    <form name="form_financeiro" method="POST" enctype="multipart/form-data">

        <div id="menuTratamento">
            <p>Financeiro</p>

            <a href="" class="btn btnAction bradius">Lançar Pagamento</a>
            <a href="" class="btn btnAction bradius">Lançar Despesa</a>
            <label for="fromData">Filtra de</label>
            <input type="text" class="txt bradius" name="fromData" id="fromData" placeholder="__/__/____" />
            <label for="toData">até</label>
            <input type="text" class="txt bradius" name="toData" id="toData" placeholder="__/__/____" />
            <input type="image" src="css/image/search-icon.png" value="submit" width="20" height="20"/>
            <input type="image" src="css/image/printer-icon.png" width="20" height="20" value="imprimir" alt="Imprimir" title="Imprimir" onclick="" />
            <label id="filtrolabel" for="filtro">Filtrar por período:</label>
            <select class="txt bradius" name="filtro" id="filtro">
                <option value="" selected="selected">[Selecione]</option>
                <option value="1">Diário</option>
                <option value="2">Semanal</option>
                <option value="3">Mensal</option>
                <option value="4">Anual</option>
            </select>
        </div>

        <div id="separator">
            <span>{$mes}</span>
        </div>

        <div id="financeiro">

            <div id="balanco">
                <div class="bradius" id="balanco-geral">
                    <div id="balanco-geral-inner">
                        <label id="label-balanco-geral">Balanço Geral</label>
                    </div>
                    <hr />
                    <span id="span-entrada" for="labelentradas">Entrada: <label id="label-entrada">R$ 31.940,00</label></span><br />
                    <span id="span-saida" for="labelsaidas">Saídas: <label id="label-saida">R$ 9.216,70</label></span>
                    <hr />
                    <span id="span-total" for="total">Saldo: <label id="label-total">R$ 22.723,30</label></span>
                </div><!-- balanco-geral -->

                <div class="bradius" id="balanco-mes">
                    <div id="balanco-mes-inner">
                        <label id="label-balanco-mes">Entradas e saídas deste mês</label>
                    </div>
                    <hr />
                    <span id="span-entrada" for="labelentradas">Entrada: <label id="label-entrada">R$ 12.720,00</label></span><br />
                    <span id="span-saida" for="labelsaidas">Saídas: <label id="label-saida">R$ 2.399,70</label></span>
                    <hr />
                    <span id="span-total" for="total">Saldo: <label id="label-total">R$ 10.320,30</label></span>
                </div><!-- balanco-mes -->
            </div><!-- balanco -->

            <div id="movimentacao">
                <div id="movimentacao-select-categoria">
                    <label id="labelcategoria" for="categoria">Filtrar por categoria: </label>
                    <select class="txt bradius" name="categorias" id="categorias">
                        <option value="" selected="selected">Tudo</option>
                        <option value="">Banco</option>
                        <option value="">Caixa</option>
                        <option value="">Cartão</option>
                        <option value="">Plano Dentário</option>
                    </select>
                </div>
                <div id="movimentacao-mes">
                    <label for="movimentos">Movimentos deste mês</label>
                </div>
                <table>
                    <tr id="rotulo">
                        <td id="movimentacao-data">Data</td>
                        <td id="movimentacao-descricao">Descrição</td>
                        <td id="movimentacao-categoria">Forma de Pagamento</td>
                        <td id="movimentacao-valor">Valor - R$</td>
                    </tr>
                    <tr>
                        <td id="movimentacao-data">01/12/2013</td>
                        <td id="movimentacao-descricao">Pagamento recebido</td>
                        <td id="movimentacao-categoria">Caixa</td>
                        <td id="movimentacao-valor"  class="positivo">3.750,00</td>
                    </tr>
                    <tr>
                        <td id="movimentacao-data">01/12/2013</td>
                        <td id="movimentacao-descricao">Pagamento efetuado</td>
                        <td id="movimentacao-categoria">Caixa</td>
                        <td id="movimentacao-valor"  class="negativo">620,00</td>
                    </tr>
                    <tr>
                        <td id="movimentacao-data">01/12/2013</td>
                        <td id="movimentacao-descricao">Pagamento recebido</td>
                        <td id="movimentacao-categoria">Banco</td>
                        <td id="movimentacao-valor"  class="positivo">5.820,00</td>
                    </tr>
                    <tr>
                        <td id="movimentacao-data">02/12/2013</td>
                        <td id="movimentacao-descricao">Pagamento efetuado. Conta de luz</td>
                        <td id="movimentacao-categoria">Banco</td>
                        <td id="movimentacao-valor"  class="negativo">317,00</td>
                    </tr>
                    <tr>
                        <td id="movimentacao-data">02/12/2013</td>
                        <td id="movimentacao-descricao">Pagamento efetuado. Conta de telefone</td>
                        <td id="movimentacao-categoria">Banco</td>
                        <td id="movimentacao-valor"  class="negativo">471,35</td>
                    </tr>
                    <tr>
                        <td id="movimentacao-data">02/12/2013</td>
                        <td id="movimentacao-descricao">Pagamento recebido</td>
                        <td id="movimentacao-categoria">Cartão</td>
                        <td id="movimentacao-valor"  class="positivo">3.150,00</td>
                    </tr>
                    <!--
                    <tr>
                        <td id="movimentacao-data">13/11/2013</td>
                        <td id="movimentacao-descricao">Pagamento recebido</td>
                        <td id="movimentacao-categoria">Cartão</td>
                        <td id="movimentacao-valor"  class="positivo">1.675,00</td>
                    </tr>
                    <tr>
                        <td id="movimentacao-data">14/11/2013</td>
                        <td id="movimentacao-descricao">Pagamento efetuado. Boleto bancário</td>
                        <td id="movimentacao-categoria">Banco</td>
                        <td id="movimentacao-valor"  class="negativo">1.417,30</td>
                    </tr>
                    -->
                    <tr>
                        <td id="movimentacao-data">03/12/2013</td>
                        <td id="movimentacao-descricao">Pagamento de funcionarios</td>
                        <td id="movimentacao-categoria">Caixa</td>
                        <td id="movimentacao-valor"  class="negativo">991,35</td>
                    </tr>
                    <!--
                    <tr>
                        <td id="movimentacao-data">18/11/2013</td>
                        <td id="movimentacao-descricao">Pagamento recebido</td>
                        <td id="movimentacao-categoria">Caixa</td>
                        <td id="movimentacao-valor"  class="positivo">4.825,00</td>
                    </tr>
                    -->
                    <tr>
                        <td id="movimentacao-data-total">TOTAL</td>
                        <td id="movimentacao-descricao-total"></td>
                        <td id="movimentacao-categoria-total"></td>
                        <td id="movimentacao-valor-total" class="positivo">10.320,30</td>
                    </tr>
                </table>

            </div><!-- movimentacao -->

        </div><!-- financeiro -->

    </form>
</div><!-- tabela -->

{include file="view/footer.tpl"}