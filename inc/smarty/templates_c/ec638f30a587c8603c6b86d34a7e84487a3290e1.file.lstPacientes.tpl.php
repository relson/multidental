<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 14:37:59
         compiled from "view\lstPacientes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:750752826777849598-81751471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec638f30a587c8603c6b86d34a7e84487a3290e1' => 
    array (
      0 => 'view\\lstPacientes.tpl',
      1 => 1382122898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '750752826777849598-81751471',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lstPaciente' => 0,
    'linha' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_528267778ed673_77022048',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528267778ed673_77022048')) {function content_528267778ed673_77022048($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("view/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



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
            <?php  $_smarty_tpl->tpl_vars['linha'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linha']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lstPaciente']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['linha']->key => $_smarty_tpl->tpl_vars['linha']->value){
$_smarty_tpl->tpl_vars['linha']->_loop = true;
?>
                <tr onMouseOver="javascript:this.style.backgroundColor = '#d2d2d2'" onMouseOut="javascript:this.style.backgroundColor = ''">
                    <td id="prontuario"><?php echo $_smarty_tpl->tpl_vars['linha']->value['prontuario'];?>
</td>
                    <td id="nome"><a class="fancybox" data-fancybox-type="iframe" href="Paciente.php?pid=<?php echo $_smarty_tpl->tpl_vars['linha']->value['prontuario'];?>
"><?php echo $_smarty_tpl->tpl_vars['linha']->value['nome'];?>
</a></td>
                    <td id="convenio"><?php echo $_smarty_tpl->tpl_vars['linha']->value['convenio'];?>
</td>
                    <td id="telefone"><?php echo $_smarty_tpl->tpl_vars['linha']->value['telefone'];?>
</td>
                    <td id="acao">
                        <input type="checkbox" name="del[]" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['prontuario'];?>
" />
                    </td>
                </tr>
            <?php } ?>
        </table>
    </form>
</div><!--tabela-->

<ul class="results">
</ul>
<?php echo $_smarty_tpl->getSubTemplate ("view/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>