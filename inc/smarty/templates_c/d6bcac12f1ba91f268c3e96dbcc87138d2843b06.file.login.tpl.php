<?php /* Smarty version Smarty-3.1.14, created on 2013-11-27 11:36:04
         compiled from "view\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6665296035472bf65-96257292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6bcac12f1ba91f268c3e96dbcc87138d2843b06' => 
    array (
      0 => 'view\\login.tpl',
      1 => 1385562385,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6665296035472bf65-96257292',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52960354759713_13711822',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52960354759713_13711822')) {function content_52960354759713_13711822($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="formlogin" class="bradius">
                <img src="css/image/logo.jpg" alt="MultiDental" title="MultiDental" />
                <form action="Login.php" method="post">
                    <input type="text" class="txt bradius" id="login" name="login" placeholder="Login" />
                    <input type="password" class="txt bradius" id="senha" name="senha" placeholder="Senha" />
                    <input type="submit" name="btn_login"  class="btn bradius" value="Entrar" />
                    <a class="link" href="">Esqueceu sua senha?</a>
                </form>
            </div><!--formlogin-->
<?php echo $_smarty_tpl->getSubTemplate ("view/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>