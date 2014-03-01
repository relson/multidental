<?php /* Smarty version Smarty-3.1.14, created on 2013-12-02 23:18:55
         compiled from "view\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:866352825f766f53d3-04481678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61af03404da14bcc0ce55775921a95688ccbeb56' => 
    array (
      0 => 'view\\menu.tpl',
      1 => 1386037126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '866352825f766f53d3-04481678',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52825f766fd8d7_26046582',
  'variables' => 
  array (
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52825f766fd8d7_26046582')) {function content_52825f766fd8d7_26046582($_smarty_tpl) {?><div id="menu">
    <nav>
        <ul class="menu">
            <li id="brand"><a href="http://localhost/multidental" alt="Home MultiDental">MultiDental</a></li>        
            <li><a href="http://localhost/multidental/Agenda.php" alt="Agenda">Agenda</a></li>
            <li><a href="http://localhost/multidental/Paciente.php" alt="Pacientes">Pacientes</a></li>
            <li><a href="http://localhost/multidental/Atendimento.php" alt="Atendimento">Atendimento</a></li>
            <li><a href="http://localhost/multidental/Financeiro.php" alt="Financeiro">Financeiro</a>
                <!--
                <ul>
                    <li id="submenu"><a href="http://localhost/multidental/Entradas.php" alt="Entradas">Entradas</a></li>
                    <li><a href="http://localhost/multidental/Saidas.php" alt="Saídas">Saídas</a></li>
                    <li><a href="http://localhost/multidental/Saldo.php" alt="Saldo">Saldo</a></li>
                </ul>
                -->
            </li>
            <li><a href="http://localhost/multidental/Configuracoes.php" alt="Configura&ccedil;&otilde;es">Configura&ccedil;&otilde;es</a></li>
        </ul>
        
        <label id="usuario" class="bradius"><img src="css/image/icon-user.png" height="20" width="20" alt="Icon User" /> <a href=""><?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</a></label>
    </nav>
</div><?php }} ?>