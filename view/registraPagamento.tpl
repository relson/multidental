<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Multi Dental</title>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="./css/registraPagamento.css"/>
        <link type="text/css" rel="stylesheet" href="./inc/Formee/css/formee-style.css"/>
        <link type="text/css" rel="stylesheet" href="./inc/Formee/css/formee-structure.css" />
        <script type="text/javascript" src="../inc/Formee/js/formee.js"></script>
        <style>
            #cartao, #cheque, #deposito, #dinheiro, #plano, #transferencia {
                display: none;
            }
        </style>
    </head>
    <body>
        <div id="container" class="formee">
            <form method="post" action="Financeiro.php" enctype="multipart/form-data" target="_parent">
                <h3>Registrar Pagamento</h3>
                <hr/>
                <div class="grid-8-12">
                    <label for="nomePaciente">Paciente:</label>
                    <input type="text" class="txt bradius" name="nomePaciente" value="{$nome}" readonly="true"/>
                </div>
                <div class="grid-4-12">
                    <label for="valorTotal">Total: R$</label>
                    <input type="text" class="txt bradius" name="valorTotal" value="{$total},00" readonly="true"/>
                </div>
                <div class="grid-8-12">
                    <label for="formaPagamento">Forma de Pagamento:</label>
                    <select class="txt bradius" name="formaPagamento" id="formapagamento">
                        <option value="">Selecione</option>
                        {foreach from=$formas item=linha}
                            <option value="{$linha.idformapagamento}">{$linha.descricao}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="grid-4-12">
                    <label for="valorPago">Valor: R$</label>
                    <input type="text" class="txt bradius" name="valorPago"/>
                </div>

                <div>&nbsp;</div>

                <div id="boleto">

                </div>

                <div id="cartao">
                    <!--Cartão: Bandeira, Data, Parcelas-->
                    <div class="grid-6-12">
                        <label for="bandeiraCartao">Bandeira: </label>
                        <select name="bandeiraCartao" class="txt bradius">
                            <option value="">Selecione</option>
                            {foreach from=$bandeiras item=linha}
                                <option value="{$linha.idbandeiraCartao}">{$linha.descricao}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="grid-6-12">
                        <label for="parcelasCartao">Parcelas:</label>
                        <input type="text" class="txt bradius" name="parcelasCartao"/>
                    </div>
                </div>

                <div id="cheque">
                    <!--Cheque: banco, agencia, conta, numero do chque, data, nome do cheque-->
                    <div class="grid-8-12">
                        <label for="nomeCheque">Nome:</label>
                        <input type="text" class="txt bradius" name="nomeCheque"/>
                    </div>
                    <div class="grid-4-12">
                        <label for="bancoCheque">Banco:</label>
                        <input type="text" name="bancoCheque" class="txt bradius"/>
                    </div>
                    <div class="grid-4-12">
                        <label for="agenciaCheque">Agência:</label>
                        <input type="text" class="txt bradius" name="agenciaCheque"/>
                    </div>
                    <div class="grid-4-12">
                        <label for="contaCheque">Conta:</label>
                        <input type="text" class="txt bradius" name="contaCheque"/>
                    </div>
                    <div class="grid-4-12">
                        <label for="dataCheque">Data:</label>
                        <input type="text" class="txt bradius datepicker" name="dataCheque"/>
                    </div>
                </div>

                <div id="deposito">
                    <!--Deposito: data do deposito, banco, terminal, Agencia acolhedora ou Num Transação-->
                    <div class="grid-12-12">
                        <label for="comprovanteDeposito">Comprovante:</label>
                        <input type="file" class="txt bradius" name="comprovanteDeposito"/>
                    </div>
                </div>

                <div id="plano">
                    <!--Plano-->
                    <div class="grid-12-12">
                        <label for="nomePlano">Plano:</label>
                        <input type="text" class="txt bradius" name="nomePlano"/>
                    </div>
                </div>

                <div id="transferencia">
                    <!--Transferencia: Agencia e Num Conta-->
                    <div class="grid-12-12">
                        <label for="comprovanteTranferencia">Comprovante:</label>
                        <input type="file" class="txt bradius" name="comprovanteTransferencia"/>
                    </div>
                </div>

                <div id="botoes">
                    <hr/>
                    <a href="Financeiro.php" class="btn bradius" target="_parent">Cancelar</a>
                    <input type="submit" class="btn bradius" value="Salvar"/>
                    <input type="hidden" name="acao" value="registraPagamento"/>
                    <input type="hidden" name="paciente" value="{$paciente}"/>
                </div>
            </form>
        </div>
        <script type="text/javascript" src="./js/lib/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="../js/plugins/jQuery-ui/js/jquery.ui.datepicker-pt-BR.js"></script>
        <script>
            $(document).ready(function() {
                var elem = document.getElementById("formapagamento");
                elem.onchange = function() {
                    var divCartao = document.getElementById("cartao");
                    var divCheque = document.getElementById("cheque");
                    var divDeposito = document.getElementById("deposito");
                    var divPlano = document.getElementById("plano");
                    var divTransferencia = document.getElementById("transferencia");
                    divCartao.style.display = (this.value == "1") ? "block" : "none";
                    divCheque.style.display = (this.value == "2") ? "block" : "none";
                    divDeposito.style.display = (this.value == "3") ? "block" : "none";
                    divPlano.style.display = (this.value == "5") ? "block" : "none";
                    divTransferencia.style.display = (this.value == "6") ? "block" : "none";
                };

                $(".datepicker").datepicker();

            });
        </script>
    </body>
</html>