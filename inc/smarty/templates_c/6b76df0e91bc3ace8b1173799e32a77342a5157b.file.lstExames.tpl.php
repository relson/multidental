<?php /* Smarty version Smarty-3.1.14, created on 2013-11-27 10:19:49
         compiled from "view\lstExames.tpl" */ ?>
<?php /*%%SmartyHeaderCode:253765282a68a81f0e3-49189420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b76df0e91bc3ace8b1173799e32a77342a5157b' => 
    array (
      0 => 'view\\lstExames.tpl',
      1 => 1385558387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '253765282a68a81f0e3-49189420',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5282a68aaa8761_29082774',
  'variables' => 
  array (
    'nome' => 0,
    'prontuario' => 0,
    'lstExames' => 0,
    'linha' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5282a68aaa8761_29082774')) {function content_5282a68aaa8761_29082774($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("view/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="tabela">
    <form name="delete_exames" method="post">
        <div id="tabelamenu">
            <p>Exames - <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</p>
            <input type="button" value="Deletar Selecionados" class="btn btnAction bradius" onclick="confirmDelExames();" />
            <input type="hidden" name="idPaciente" value="<?php echo $_smarty_tpl->tpl_vars['prontuario']->value;?>
" />
            <a href="Exame.php?nexa=<?php echo $_smarty_tpl->tpl_vars['prontuario']->value;?>
" class="btn btnAction bradius">Novo Exame</a>
            <input type="text" class="txt bradius" name="pesquisa" id="pesquisa" placeholder="Pesquisar exame" />
            <input type="image" src="css/image/search-icon.png" width="20" height="20" value="submit" />
        </div>
        <table>
            <tr id="rotulo">
                <td id="data">Data</td>
                <td id="td_exameNome">Exame</td>
                <td id="acao"><input type="checkbox" name="chkAll" onClick="checkAll(this);" /></td>
            </tr>
            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['linha'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linha']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lstExames']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['linha']->key => $_smarty_tpl->tpl_vars['linha']->value){
$_smarty_tpl->tpl_vars['linha']->_loop = true;
?>
                <tr onMouseOver="javascript:this.style.backgroundColor = '#d2d2d2'" onMouseOut="javascript:this.style.backgroundColor = ''">
                    <td id="data"><?php echo $_smarty_tpl->tpl_vars['linha']->value['dataExame'];?>
</td>
                    <td id="td_exameNome">
                        <a href="Exame.php?exa=<?php echo $_smarty_tpl->tpl_vars['prontuario']->value;?>
&ed=<?php echo $_smarty_tpl->tpl_vars['linha']->value['idExames'];?>
">Exame Físico <?php if ($_smarty_tpl->tpl_vars['linha']->value['idExames']<10){?>0<?php }?><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
                    </td>
                    <td id="acao">
                        <input type="checkbox" name="del[]" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['idExames'];?>
" />
                    </td>
                </tr>
                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
            <?php } ?>
        </table>
    </form>
</div> <!-- tabela -->

<?php echo $_smarty_tpl->getSubTemplate ("view/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>