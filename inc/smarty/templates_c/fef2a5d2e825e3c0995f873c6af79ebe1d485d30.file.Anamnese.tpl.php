<?php /* Smarty version Smarty-3.1.14, created on 2013-11-19 11:16:06
         compiled from "view\Anamnese.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157305282c168b8e462-47811796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fef2a5d2e825e3c0995f873c6af79ebe1d485d30' => 
    array (
      0 => 'view\\Anamnese.tpl',
      1 => 1384870565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157305282c168b8e462-47811796',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5282c168c655f6_51546072',
  'variables' => 
  array (
    'p' => 0,
    'nome' => 0,
    'linha' => 0,
    'idPaciente' => 0,
    'anamnese' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5282c168c655f6_51546072')) {function content_5282c168c655f6_51546072($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("view/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="anamnese" class="bradius">
    <?php  $_smarty_tpl->tpl_vars['linha'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linha']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['p']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['linha']->key => $_smarty_tpl->tpl_vars['linha']->value){
$_smarty_tpl->tpl_vars['linha']->_loop = true;
?>
        <form class="formee" id="frm_form" action="Anamnese.php" method="post">
            <h3>Anamnese</h3>
            <div id="nomePaciente">
                <label>Paciente: <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</label>
            </div>
            <hr />
            <div id="anamneseForm">
                
                <div class="grid-6-12">
                    <label for="histMedica">História médica:</label>
                    <textarea rows="4" cols="50" class="txt bradius" id="histMedica" name="histMedica" required><?php echo $_smarty_tpl->tpl_vars['linha']->value['histMedica'];?>
</textarea>
                </div>
                <div class="grid-6-12">
                    <label for="histFamiliar">História familiar:</label>
                    <textarea rows="4" cols="50" class="txt bradius" id="histFamiliar" name="histFamiliar" required><?php echo $_smarty_tpl->tpl_vars['linha']->value['histFamiliar'];?>
</textarea>
                </div>
                <div class="grid-6-12">
                    <label for="histPessoal">História pessoal e social:</label>
                    <textarea rows="4" cols="50" class="txt bradius" id="histPessoal" name="histPessoal" required><?php echo $_smarty_tpl->tpl_vars['linha']->value['histPessoal'];?>
</textarea>
                </div>
                <div class="grid-6-12">
                    <label for="histOdontologica">História odontológica:</label>
                    <textarea rows="4" cols="50" class="txt bradius" id="histOdontologica" name="histOdontologica" required><?php echo $_smarty_tpl->tpl_vars['linha']->value['histOdontologica'];?>
</textarea>
                </div>
            </div>
            <div id="anamneseBtn">
                <a href="Paciente.php?p=<?php echo $_smarty_tpl->tpl_vars['idPaciente']->value;?>
" class="btn bradius">Cancelar</a>
                <input type="hidden" name="idPaciente" value="<?php echo $_smarty_tpl->tpl_vars['idPaciente']->value;?>
" />
                <input type="hidden" name="acao" value="salvar" />
                <input type="hidden" name="idAnamnese" value="<?php echo $_smarty_tpl->tpl_vars['anamnese']->value;?>
" />
                <input type="reset" name="btn_reset" class="btn bradius" value="Limpar" />
                <input type="submit" name="btn_form"  class="btn bradius" value="Salvar" />
            </div>
        </form>
    <?php } ?>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("view/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>