<?php /* Smarty version Smarty-3.1.14, created on 2014-03-23 15:38:44
         compiled from "view\lstTratamento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157435282a69855bc30-61174449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '315bd4d7eb130fe3ffd298ddda678611f4eda572' => 
    array (
      0 => 'view\\lstTratamento.tpl',
      1 => 1395599923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157435282a69855bc30-61174449',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5282a6985adfe5_31774582',
  'variables' => 
  array (
    'nome' => 0,
    'prontuario' => 0,
    'lstTratamento' => 0,
    'linha' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5282a6985adfe5_31774582')) {function content_5282a6985adfe5_31774582($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("view/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="tabela">
    <form name="delete_tratamento" method="post">
        <div id="menuTratamento">
            <p>Plano de Tratamento - <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</p>
            <input type="hidden" name="idPaciente" value="<?php echo $_smarty_tpl->tpl_vars['prontuario']->value;?>
" />
            <input type="button" value="Deletar Selecionados" class="btn btnAction bradius" onclick="confirmDelTratamento();" />
            <input type="button" value="Aprovar Orcamento" class="btn btnAction bradius" onclick="aprovaOrcamento();" />
            <a href="Tratamento.php?tid=<?php echo $_smarty_tpl->tpl_vars['prontuario']->value;?>
" class="tratamento btn btnAction bradius" data-fancybox-type="iframe">Novo Procedimento</a>
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
            <?php  $_smarty_tpl->tpl_vars['linha'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linha']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lstTratamento']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['linha']->key => $_smarty_tpl->tpl_vars['linha']->value){
$_smarty_tpl->tpl_vars['linha']->_loop = true;
?>
                <tr onMouseOver="javascript:this.style.backgroundColor = '#d2d2d2'" onMouseOut="javascript:this.style.backgroundColor = ''">
                    <td id="data"><?php echo $_smarty_tpl->tpl_vars['linha']->value['data'];?>
</td>
                    <td id="tratamentoProcedimento">
                        <a href="Tratamento.php?ted=<?php echo $_smarty_tpl->tpl_vars['prontuario']->value;?>
&tid=<?php echo $_smarty_tpl->tpl_vars['linha']->value['idTratamento'];?>
" class="tratamento" data-fancybox-type="iframe">
                            <?php echo $_smarty_tpl->tpl_vars['linha']->value['procedimento'];?>

                        </a>
                    </td>
                    <td id="tratamentoValor"><?php echo $_smarty_tpl->tpl_vars['linha']->value['valor'];?>
</td>
                    <td id="tratamentoAprovado"><?php echo $_smarty_tpl->tpl_vars['linha']->value['orcamentoAprovado'];?>
</td>
                    
                    <td id="tratamentoRealizado"><?php echo $_smarty_tpl->tpl_vars['linha']->value['realizado'];?>
</td>
                    <td id="acao">
                        <input type="checkbox" name="del[]" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['idTratamento'];?>
" />
                    </td>
                </tr>
            <?php } ?>
        </table>
    </form>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("view/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>