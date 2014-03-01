<?php /* Smarty version Smarty-3.1.14, created on 2013-11-14 11:11:57
         compiled from "view\ErrorPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178375284da2dda6435-59305549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '727c5cdfe4681cf2696e070801f1e0450be091f8' => 
    array (
      0 => 'view\\ErrorPage.tpl',
      1 => 1383670751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178375284da2dda6435-59305549',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5284da2ddfe3a7_92813769',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5284da2ddfe3a7_92813769')) {function content_5284da2ddfe3a7_92813769($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("view/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="erro" class="bradius">
    <h1 id="erro_h1">404</h1> 
    <h3 id="erro_h3">PÁGINA NÃO ENCONTRADA</h3>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("view/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>