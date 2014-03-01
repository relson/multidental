<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Multi Dental</title>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="./css/style_tratamento.css" />
        <script type="text/javascript" src="./js/lib/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="./js/plugins/jquery.maskedinput.min.js"></script>
        <script type="text/javascript" src="./js/plugins/jquery.validate.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#data').mask("99/99/9999");
            });
        </script>
    </head>
    <body>
        {foreach from=$lstTratamento item=linha}
            <div id="container">
                <form id="frm_tratamento" method="post" enctype="multipart/form-data" target="_parent">
                    <h3>Tratamento</h3>
                    <hr />

                    <div id="left">
                        <p><label>Data Prevista:</label></p>
                        <input type="text" class="txt bradius" id="data" name="data" value="{$linha.data}" />
                        <p><label>Valor - R$:</label></p>
                        <input type="text" class="txt bradius" id="valor" name="valor" value="{$linha.valor}"/>
                        <p><label for="pagamento">Forma de pagamento:</label></p>
                        <select class="txt bradius" id="formapagamento" name="formapagamento">
                            <option value="[Aguardando Aprovação]" {if $linha.formaPagamento == '[Aguardando Aprovação]'}selected="selected"{/if}>[Escolha]</option>
                            <option value="Dinheiro" {if $linha.formaPagamento == 'Dinheiro'}selected="selected"{/if}>Dinheiro</option>
                            <option value="Cheque" {if $linha.formaPagamento == 'Cheque'}selected="selected"{/if}>Cheque</option>
                            <option value="Cartão (Crédito)" {if $linha.formaPagamento == 'Cartão (Crédito)'}selected="selected"{/if}>Cartão de Crédito</option>
                            <option value="Cartão (Débito)" {if $linha.formaPagamento == 'Cartão (Débito)'}selected="selected"{/if}>Cartão de Débito</option>
                        </select>
                    </div>
                    <div id="right">
                        <p><label>Procedimento:</label></p>
                        <input type="text" class="txt bradius" id="procedimento" name="procedimento" value="{$linha.procedimento}" />
                        <p><label>Orçamento aprovado:</label></p>
                        <select class="txt bradius" name="orcamento" id="orcamento">
                            <option value="" {if $linha.orcamentoAprovado == ''}selected="selected"{/if}>[Escolha]</option>
                            <option value="Sim" {if $linha.orcamentoAprovado == 'Sim'}selected="selected"{/if}>Sim</option>
                            <option value="Não" {if $linha.orcamentoAprovado != 'Sim'}selected="selected"{/if}>Não</option>
                        </select>
                        <p><label>Num. Parcelas:</label></p>
                        <input type="text" class="txt bradius" id="parcelamento" name="parcelamento" value="{$linha.parcelamento}" />
                    </div>
                    <div id="botoes">
                        <a href="Tratamento.php?ptr={$prontuario}" class="cancel bradius" target="_parent">Cancelar</a>
                        <input type="submit" name="btn_cad" class="btn bradius" value="Atualizar" />
                        <input type="hidden" name="acao" value="atualizar" />
                        <input type="hidden" name="paciente" value="{$prontuario}" />
                        <input type="hidden" name="tratamento" value="{$linha.idTratamento}" />
                    </div>
                </form>
            </div><!-- container -->
        {/foreach}
    </body>
</html>