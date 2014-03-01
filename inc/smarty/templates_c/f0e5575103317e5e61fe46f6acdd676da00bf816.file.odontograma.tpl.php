<?php /* Smarty version Smarty-3.1.14, created on 2013-11-27 11:15:53
         compiled from "view\odontograma.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60575282c12ee6ca63-50642900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0e5575103317e5e61fe46f6acdd676da00bf816' => 
    array (
      0 => 'view\\odontograma.tpl',
      1 => 1385561709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60575282c12ee6ca63-50642900',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5282c12f1a5881_74482457',
  'variables' => 
  array (
    'idPaciente' => 0,
    'nome' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5282c12f1a5881_74482457')) {function content_5282c12f1a5881_74482457($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("view/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="odontograma" class="bradius">
    <h2>Odontograma</h2>
    <div id="odo_paciente">
        <h3 id="prontuario">Prontuário: <?php echo $_smarty_tpl->tpl_vars['idPaciente']->value;?>
</h3>
        <h3>Paciente: <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</h3>
    </div>
    <hr />

    <div id="img_odontograma">
        <img src="css/image/Odontograma.png" height="" width="" alt="Odontograma" />
    </div>
    <div id="legenda_odontograma">
        <fieldset class="bradius" >
            <legend>Opções</legend>
            <span>
                <span id="odo_canal" class="bradius" >
                    <input type="radio" name="legenda" id="canal" value="canal" />
                    <label for="canal" id="legenda">Canal</label>
                </span>
                <span id="odo_extracao" class="bradius" >
                    <input type="radio" name="legenda" id="extracao" value="extracao" /> 
                    <label for="extracao" id="legenda">Extração</label>
                </span>
                <span id="odo_implante" class="bradius" >
                    <input type="radio" name="legenda" id="implante" value="implante" /> 
                    <label for="implante" id="legenda">Implante</label>
                </span>
                <span id="odo_protese" class="bradius" >
                    <input type="radio" name="legenda" id="protese" value="protese" />
                    <label for="protese" id="legenda">Prótese</label>
                </span>
                <span id="odo_restauracao" class="bradius" >
                    <input type="radio" name="legenda" id="restauracao" value="restauracao" />
                    <label for="restauracao" id="legenda">Restauração</label>
                </span>
            </span>
        </fieldset>
    </div>
    <div id="obs">
        <p>
            <label for="observacao">Observação:</label></p>
        <textarea class="txt bradius" id="obs" rows="5" cols="55"></textarea>
    </div>
    <div id="botoes_odontograma">
        <a href="Paciente.php?p=<?php echo $_smarty_tpl->tpl_vars['idPaciente']->value;?>
" class="btn bradius">Cancelar</a>
        <input type="reset" name="btn_reset" class="btn bradius" value="Limpar" />
        <input type="hidden" name="acao" value="cadastrar" />
        <input type="submit" name="btn_cad"  class="btn bradius" value="Salvar" />
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("view/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>