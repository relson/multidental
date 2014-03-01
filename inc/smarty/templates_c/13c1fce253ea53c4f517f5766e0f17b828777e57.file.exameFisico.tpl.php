<?php /* Smarty version Smarty-3.1.14, created on 2013-11-27 10:24:09
         compiled from "view\exameFisico.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94335282a68d1f64f5-58953287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13c1fce253ea53c4f517f5766e0f17b828777e57' => 
    array (
      0 => 'view\\exameFisico.tpl',
      1 => 1385558572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94335282a68d1f64f5-58953287',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5282a68d290c05_85896801',
  'variables' => 
  array (
    'prontuario' => 0,
    'nome' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5282a68d290c05_85896801')) {function content_5282a68d290c05_85896801($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("view/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="exameFisico" class="bradius" >

    <form class="formee" id="form_exame" action="" method="post">
        <h3>Exame Físico</h3>
        <div id="fromExame">
            <div id="exa_paciente">
                <label>Prontuário: <?php echo $_smarty_tpl->tpl_vars['prontuario']->value;?>
</label>
                <label>Paciente: <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</label>
            </div>
            <h2>Sinais Vitais</h2>
            <hr />
            <div id="sinais">
                <div class="grid-3-12">
                    <label for="pressao">Pressão arterial:</label>
                    <input type="text" class="txt bradius" name="pressao" id="pressao" required /> mmHg
                </div>
                <div class="grid-3-12">
                    <label for="frequencia">Frequencia cardíaca:</label>
                    <input type="text" class="txt bradius" name="freqCardiaca" id="frequencia" required /> bpm
                </div>
                
                <div class="grid-3-12">
                    <label for="pdr_esqueletico">Padrão esquelético:</label>
                    <select name="padraoEsqueletico" id="pdr_esqueletico" required>
                        <option value="">[Escolha]</option>
                        <option value="Normocefálico">Normocefálico</option>
                        <option value="Braquicefálico">Braquicefálico</option>
                        <option value="Dolicocefálico">Dolicocefálico</option>
                    </select>
                </div>
                <div class="grid-3-12">
                    <label for="perfil_facial">Perfil facial:</label>
                    <select name="perfilFacial" id="pdr_esqueletico" required>
                        <option value="">[Escolha]</option>
                        <option value="Normal">Normal</option>
                        <option value="Côncavo">Côncavo</option>
                        <option value="Convexo">Convexo</option>
                    </select>
                </div>
            </div>
            <h2>Extrabucal</h2>
            <hr />
            <div class="grid-12-12">
                <label>Localização e descrição:</label>
                <textarea class="txt bradius" id="local" name="extraBucal"></textarea>
            </div>            
            <h2>Intrabucal</h2>
            <hr />
            <h4>Exame dos tecidos moles</h4>
            <div class="grid-6-12">
                <label for="localizacao">Localização:</label>
                <input type="text" class="txt bradius" name="localizacao" id="localizacao" />
            </div>
            <div class="grid-6-12">
                <label for="forma">Forma:</label>
                <input type="text" class="txt bradius" name="forma" id="forma" />
            </div>
            <div class="grid-6-12">
                <label for="tamanho">Tamanho:</label>
                <input type="text" class="txt bradius" name="tamanho" id="tamanho" />
            </div>
            <div class="grid-6-12">
                <label for="cor">Cor:</label>
                <input type="text" class="txt bradius" name="cor" id="cor" />
            </div>
            <div class="grid-6-12">
                <label for="superficie">Superfície:</label>
                <input type="text" class="txt bradius" name="superficie" id="superficie" />
            </div>
            <div class="grid-6-12">
                <label for="consistencia">Consistência:</label>
                <input type="text" class="txt bradius" name="consistencia" id="consistencia" />
            </div>
            <div class="grid-6-12">
                <label for="insercao">Inserção:</label>
                <input type="text" class="txt bradius" name="insercao" id="insercao" />
            </div>
            <div class="grid-6-12">
                <label for="sinais_secundarios">Sinais Secundários:</label>
                <input type="text" class="txt bradius" name="sinaisSecundarios" id="sinais_secundarios" />
            </div>
        </div>
        <div id="exameBtn">
            <a href="Exame.php?exa=<?php echo $_smarty_tpl->tpl_vars['prontuario']->value;?>
" class="btn bradius">Cancelar</a>
            <input type="reset" name="btn_reset" class="btn bradius" value="Limpar" />
            <input type="hidden" name="acao" value="salvar" />
            <input type="hidden" name="paciente" value="<?php echo $_smarty_tpl->tpl_vars['prontuario']->value;?>
" />
            <input type="submit" name="btn_cad"  class="btn bradius" value="Salvar" />
        </div>
    </form>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>