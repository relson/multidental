<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Multi Dental</title>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="./css/style_tratamento.css" />
        <link type="text/css" rel="stylesheet" href="./js/plugins/jQuery-ui/css/start/jquery-ui-start.css" />
        <link type="text/css" rel="stylesheet" href="./inc/Formee/css/formee-style.css" />
        <link type="text/css" rel="stylesheet" href="./inc/Formee/css/formee-structure.css" />

        <script type="text/javascript" src="./js/lib/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="./js/plugins/jquery.maskedinput.min.js"></script>
        <script type="text/javascript" src="./js/plugins/jquery.validate.js"></script>
        <script type="text/javascript" src="./inc/Formee/js/formee.js"></script>
        <script type="text/javascript" src="./js/plugins/jQuery-ui/js/jquery.ui.datepicker-pt-BR.js"></script>
        <script type="text/javascript" src="./js/plugins/jQuery-ui/js/jquery-ui.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#data').mask("99/99/9999");

                $(function() {
                    $("#data").datepicker();
                });
            });
        </script>
    </head>
    <body>
        {foreach from=$lstTratamento item=linha}
            <div id="container">
                <form class="formee" id="frm_tratamento" method="post" target="_parent">
                    <h3>Procedimento</h3>
                    <hr />
                    <div id="formTratamento">

                        <div class="grid-6-12">
                            <label>Procedimento:</label>
                            <input type="text" class="txt bradius" id="procedimento" name="procedimento" value="{$linha.procedimento}" />
                        </div>
                        <div class="grid-6-12">
                            <label>Data Prevista:</label>
                            <input type="text" class="txt bradius" id="data" name="data" value="{$linha.data}" />
                        </div>
                        <div class="grid-6-12">
                            <label>Valor - R$:</label>
                            <input type="text" class="txt bradius" id="valor" name="valor" value="{$linha.valor}" />
                        </div>
                        {*<div class="grid-6-12">
                        <label>Orçamento aprovado:</label>
                        <select class="txt bradius" name="orcamento" id="orcamento">
                        <option value="" {if $linha.orcamentoAprovado == ''}selected="selected"{/if}>[Escolha]</option>
                        <option value="Sim" {if $linha.orcamentoAprovado == 'Sim'}selected="selected"{/if}>Sim</option>
                        <option value="Não" {if $linha.orcamentoAprovado != 'Sim'}selected="selected"{/if}>Não</option>
                        </select>
                        </div>*}
                        {*                        <div class="grid-4-12">
                        <label>Forma de pagamento:</label>
                        <select class="txt bradius" name="formaDePagamento" id="formaDePagamento">
                        <option value="[Aguardando Aprovação]" {if $linha.formaPagamento == '[Aguardando Aprovação]'}selected="selected"{/if}>[Escolha]</option>
                        <option value="Dinheiro" {if $linha.formaPagamento == 'Dinheiro'}selected="selected"{/if}>Dinheiro</option>
                        <option value="Cheque" {if $linha.formaPagamento == 'Cheque'}selected="selected"{/if}>Cheque</option>
                        <option value="Cartão (Crédito)" {if $linha.formaPagamento == 'Cartão (Crédito)'}selected="selected"{/if}>Cartão de Crédito</option>
                        <option value="Cartão (Débito)" {if $linha.formaPagamento == 'Cartão (Débito)'}selected="selected"{/if}>Cartão de Débito</option>
                        </select>
                        </div>
                        <div class="grid-4-12">
                        <label>Num. Parcelas:</label>
                        <input type="text" class="txt bradius" id="parcelamento" name="parcelamento" value="{$linha.parcelamento}" />
                        </div>
                        *}                        
                        <div class="grid-6-12">
                            <label>Procedimento Realizado?</label>
                            <select class="txt bradius" name="realizado" id="realizado">
                                <option value="" {if $linha.realizado == ""}selected="selected"{/if}>[Escolha]</option>
                                <option value="1" {if $linha.realizado == "Sim"}selected="selected"{/if}>Sim</option>
                                <option value="0" {if $linha.realizado == "Não"}selected="selected"{/if}>Não</option>
                                <option value="2" {if $linha.realizado == "Em andamento"}selected="selected"{/if}>Em andamento</option>
                            </select>
                        </div>
                    </div>
                    <div id="botoes">
                        <a href="Tratamento.php?ptr={$prontuario}" class="cancel bradius" target="_parent">Cancelar</a>
                        <input type="reset" name="btn_reset" class="btn bradius" value="Limpar" />
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
