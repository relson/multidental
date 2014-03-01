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
        <div id="container">
            <form id="frm_tratamento" method="post" enctype="multipart/form-data" target="_parent">
                <h3>Tratamento</h3>
                <hr />
                <div id="left">
                    <p><label>Data Prevista:</label></p>
                    <input type="text" class="txt bradius" id="data" name="data" />
                    <p><label>Valor - R$:</label></p>
                    <input type="text" class="txt bradius" id="valor" name="valor" />
                    <p><label>Forma de pagamento:</label></p>
                    <select class="txt bradius" name="formapagemento" id="formapagamento">
                        <option value="[Aguardando Aprovação]" selected="selected">[Escolha]</option>
                        <option value="Dinheiro">Dinheiro</option>
                        <option value="Cheque">Cheque</option>
                        <option value="Cartão (Crédito)">Cartão (Crédito)</option>
                        <option value="Cartão (Débito)">Cartão (Débito)</option>
                    </select>
                </div>
                <div id="right">
                    <p><label>Procedimento:</label></p>
                    <input type="text" class="txt bradius" id="procedimento" name="procedimento" />
                    <p><label>Orçamento aprovado:</label></p>
                    <select class="txt bradius" name="orcamento" id="orcamento">
                        <option value="" selected="selected">[Escolha]</option>
                        <option value="Sim">Sim</option>
                        <option value="Não">Não</option>
                    </select>
                    <p><label>Num. Parcelas:</label></p>
                    <input type="text" class="txt bradius" id="parcelamento" name="parcelamento" />
                </div>
                <div id="botoes">
                    <a href="Tratamento.php?ptr={$prontuario}" class="cancel bradius" target="_parent">Cancelar</a>
                    <input type="submit" name="btn_cad" class="btn bradius" value="Salvar" />
                    <input type="hidden" name="acao" value="salvar" />
                    <input type="hidden" name="paciente" value="{$prontuario}" />
                </div>
            </form>
        </div><!-- container -->
    </body>
</html>
