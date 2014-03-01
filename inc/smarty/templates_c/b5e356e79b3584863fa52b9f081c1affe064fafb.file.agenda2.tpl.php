<?php /* Smarty version Smarty-3.1.14, created on 2013-11-19 23:46:46
         compiled from "view\agenda2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31489528bc6c2ade295-80360964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5e356e79b3584863fa52b9f081c1affe064fafb' => 
    array (
      0 => 'view\\agenda2.tpl',
      1 => 1384915605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31489528bc6c2ade295-80360964',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_528bc6c2b0f766_88580074',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528bc6c2b0f766_88580074')) {function content_528bc6c2b0f766_88580074($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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