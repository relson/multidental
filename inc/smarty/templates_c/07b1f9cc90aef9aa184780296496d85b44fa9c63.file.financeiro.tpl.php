<?php /* Smarty version Smarty-3.1.14, created on 2014-04-08 22:17:05
         compiled from ".\view\financeiro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15885534494330192b4-26158071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07b1f9cc90aef9aa184780296496d85b44fa9c63' => 
    array (
      0 => '.\\view\\financeiro.tpl',
      1 => 1397006217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15885534494330192b4-26158071',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5344943306cc08_15132641',
  'variables' => 
  array (
    'mes' => 0,
    'entrada' => 0,
    'saida' => 0,
    'balancogeral' => 0,
    'totalMes' => 0,
    'dados' => 0,
    'linha' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5344943306cc08_15132641')) {function content_5344943306cc08_15132641($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("view/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="tabela">
    <form name="form_financeiro" method="POST" enctype="multipart/form-data">

        <div id="menuTratamento">
            <p>Financeiro</p>

            <a href="Financeiro.php?pag=true" class="btn btnAction bradius lancaPagamento" data-fancybox-type="iframe">Lançar Pagamento</a>
            <a href="Financeiro.php?des=true" class="btn btnAction bradius lancaDespesa" data-fancybox-type="iframe">Lançar Despesa</a>
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
            <span><?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
</span>
        </div>

        <div id="financeiro">

            <div id="balanco">
                <div class="bradius" id="balanco-geral">
                    <div id="balanco-geral-inner">
                        <label id="label-balanco-geral">Balanço Geral</label>
                    </div>
                    <hr />
                    <span id="span-entrada" for="labelentradas">Entrada: <label id="label-entrada" class="positivo">R$ <?php echo $_smarty_tpl->tpl_vars['entrada']->value;?>
</label></span><br />
                    <span id="span-saida" for="labelsaidas">Saídas: <label id="label-saida" class="negativo">R$ <?php echo $_smarty_tpl->tpl_vars['saida']->value;?>
</label></span>
                    <hr />
                    <span id="span-total" for="total">Saldo: 
                        <label id="label-total" class="<?php if (($_smarty_tpl->tpl_vars['balancogeral']->value<0)){?>negativo<?php }else{ ?>positivo<?php }?>">
                            R$ <?php echo $_smarty_tpl->tpl_vars['balancogeral']->value;?>

                        </label>
                    </span>
                </div><!-- balanco-geral -->

                <div class="bradius" id="balanco-mes">
                    <div id="balanco-mes-inner">
                        <label id="label-balanco-mes">Entradas e saídas deste mês</label>
                    </div>
                    <hr />
                    <span id="span-entrada" for="labelentradas">Entrada: <label id="label-entrada" class="positivo">R$ 12.720,00</label></span><br />
                    <span id="span-saida" for="labelsaidas">Saídas: <label id="label-saida" class="negativo">R$ 2.399,70</label></span>
                    <hr />
                    <span id="span-total" for="total">Saldo: 
                        <label id="label-total" class="<?php if (($_smarty_tpl->tpl_vars['totalMes']->value<0)){?>negativo<?php }else{ ?>positivo<?php }?>">
                            R$ <?php echo $_smarty_tpl->tpl_vars['totalMes']->value;?>

                        </label>
                    </span>
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
                    <thead>
                        <tr id="rotulo">
                            <td id="movimentacao-data">Data</td>
                            <td id="movimentacao-descricao">Descrição</td>
                            <td id="movimentacao-categoria">Forma de Pagamento</td>
                            <td id="movimentacao-valor">Valor - R$</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  $_smarty_tpl->tpl_vars['linha'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linha']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['linha']->key => $_smarty_tpl->tpl_vars['linha']->value){
$_smarty_tpl->tpl_vars['linha']->_loop = true;
?>
                            <tr>
                                <td id="movimentacao-data"><?php echo $_smarty_tpl->tpl_vars['linha']->value['DtPagamento'];?>
</td>
                                <td id="movimentacao-descricao">
                                    <?php if (($_smarty_tpl->tpl_vars['linha']->value['idTipoMovimentacao']==1)){?>
                                        Pagamento recebido do paciente <em><?php echo $_smarty_tpl->tpl_vars['linha']->value['paciente'];?>
</em>
                                    <?php }elseif(($_smarty_tpl->tpl_vars['linha']->value['idTipoMovimentacao']==2)){?>
                                        <?php echo $_smarty_tpl->tpl_vars['linha']->value['descricao'];?>

                                    <?php }?>
                                </td>
                                <td id="movimentacao-categoria"><?php echo $_smarty_tpl->tpl_vars['linha']->value['categoria'];?>
</td>
                                <td id="movimentacao-valor"><?php echo $_smarty_tpl->tpl_vars['linha']->value['valor'];?>
</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr id="movimentacao-tr-total">
                            <td colspan="3" id="movimentacao-total">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TOTAL</td>
                            <td id="movimentacao-valor-total" class="<?php if (($_smarty_tpl->tpl_vars['totalMes']->value<0)){?>negativo<?php }else{ ?>positivo<?php }?>"><?php echo $_smarty_tpl->tpl_vars['totalMes']->value;?>
</td>
                        </tr>
                    </tfoot>
                </table>

            </div><!-- movimentacao -->

        </div><!-- financeiro -->

    </form>
</div><!-- tabela -->

<?php echo $_smarty_tpl->getSubTemplate ("view/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>