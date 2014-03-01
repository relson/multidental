<?php /* Smarty version Smarty-3.1.14, created on 2013-11-29 16:52:35
         compiled from "view\agenda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2750552825f76693da1-25190232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3960efcfc75da67f58644321e72ac0ac8082c7c8' => 
    array (
      0 => 'view\\agenda.tpl',
      1 => 1385754753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2750552825f76693da1-25190232',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52825f766d1784_49905802',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52825f766d1784_49905802')) {function content_52825f766d1784_49905802($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("view/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="agenda">
    <div id="tabelamenu">
        <p>Agenda</p>
        <!--<label id="labeldata">Data: </label>
        <input type="text" class="txt bradius" name="datepicker" id="datepicker" />-->
        <a href="Agendamento.php" class="agendamento btn btnAction bradius" data-fancybox-type="iframe">Novo Agendamento</a>
    </div>
    <iframe width='100%' height='900' frameborder='0' src='./inc/agenda/agenda.php'></iframe>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("view/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>