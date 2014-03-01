<?php /* Smarty version Smarty-3.1.14, created on 2013-11-22 16:30:11
         compiled from "view\atendimento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30361528ea2f1d74901-58528700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a018f83bf7612e5e7c61f717dceda8ce93e35822' => 
    array (
      0 => 'view\\atendimento.tpl',
      1 => 1385148609,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30361528ea2f1d74901-58528700',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_528ea2f1dc6439_29672142',
  'variables' => 
  array (
    'dia' => 0,
    'agendamentos' => 0,
    'linha' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528ea2f1dc6439_29672142')) {function content_528ea2f1dc6439_29672142($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("view/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="tabela">
    <div id="tabelamenu">
        <p>Atendimento - <?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
</p>
    </div>
    <table>
        <tr id="rotulo">
            <td id="horario">Horário</td>
            <td id="prontuario">Prontuário</td>
            <td id="nome">Nome</td>
            <td id="observacao">Observação</td>
            <td id="atendido">Atendido</td>

        </tr>
        <?php  $_smarty_tpl->tpl_vars['linha'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linha']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['agendamentos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['linha']->key => $_smarty_tpl->tpl_vars['linha']->value){
$_smarty_tpl->tpl_vars['linha']->_loop = true;
?>
        <tr onMouseOver="javascript:this.style.backgroundColor = '#d2d2d2'" onMouseOut="javascript:this.style.backgroundColor = ''">
            <td id="horario"><?php echo $_smarty_tpl->tpl_vars['linha']->value['hora'];?>
:<?php echo $_smarty_tpl->tpl_vars['linha']->value['minuto'];?>
</td>
            <td id="prontuario"><?php echo $_smarty_tpl->tpl_vars['linha']->value['idPaciente'];?>
</td>
            <td id="nome"><a class="fancybox" data-fancybox-type="iframe" href="Paciente.php?pid=<?php echo $_smarty_tpl->tpl_vars['linha']->value['idPaciente'];?>
"><?php echo $_smarty_tpl->tpl_vars['linha']->value['nome'];?>
</a></td>
            <td id="observacao"><?php if ($_smarty_tpl->tpl_vars['linha']->value['observacao']==''){?>Sem observação<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['linha']->value['observacao'];?>
<?php }?></td>
            <td id="atendido">Não</td>

        </tr>
        <?php } ?>
    </table>
</div><!-- ATENDIMENTO -->

<?php echo $_smarty_tpl->getSubTemplate ("view/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>