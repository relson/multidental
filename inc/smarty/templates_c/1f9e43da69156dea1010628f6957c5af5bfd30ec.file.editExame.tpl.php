<?php /* Smarty version Smarty-3.1.14, created on 2013-11-19 11:46:28
         compiled from "view\editExame.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105745283ac76154080-98030017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f9e43da69156dea1010628f6957c5af5bfd30ec' => 
    array (
      0 => 'view\\editExame.tpl',
      1 => 1384872384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105745283ac76154080-98030017',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5283ac7639fca3_34137607',
  'variables' => 
  array (
    'exame' => 0,
    'prontuario' => 0,
    'nome' => 0,
    'linha' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5283ac7639fca3_34137607')) {function content_5283ac7639fca3_34137607($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("view/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php  $_smarty_tpl->tpl_vars['linha'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linha']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['exame']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['linha']->key => $_smarty_tpl->tpl_vars['linha']->value){
$_smarty_tpl->tpl_vars['linha']->_loop = true;
?>
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
                        <input type="text" class="txt bradius" name="pressao" id="pressao" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['pressaoArterial'];?>
" required /> mmHg
                    </div>
                    <div class="grid-3-12">
                        <label for="frequencia">Frequencia cardíaca:</label>
                        <input type="text" class="txt bradius" name="freqCardiaca" id="frequencia" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['freqCardiaca'];?>
" required /> bpm
                    </div>
                    
                    <div class="grid-3-12">
                        <label for="pdr_esqueletico">Padrão esquelético:</label>
                        <select name="padraoEsqueletico" id="pdr_esqueletico" required>
                            <option value="" <?php if ($_smarty_tpl->tpl_vars['linha']->value['padraoEsqueletico']==''){?> selected <?php }?>>[Escolha]</option>
                            <option value="Normocefálico" <?php if ($_smarty_tpl->tpl_vars['linha']->value['padraoEsqueletico']=="Normocefálico"){?> selected <?php }?>>Normocefálico</option>
                        <option value="Braquicefálico" <?php if ($_smarty_tpl->tpl_vars['linha']->value['padraoEsqueletico']=="Braquicefálico"){?> selected <?php }?>>Braquicefálico</option>
                        <option value="Dolicocefálico" <?php if ($_smarty_tpl->tpl_vars['linha']->value['padraoEsqueletico']=="Dolicocefálico"){?> selected <?php }?>>Dolicocefálico</option>
                        </select>
                    </div>
                    <div class="grid-3-12">
                        <label for="perfil_facial">Perfil facial:</label>
                        <select name="perfilFacial" id="pdr_esqueletico" required>
                            <option value="" <?php if ($_smarty_tpl->tpl_vars['linha']->value['perfilFacial']==''){?> selected <?php }?>>[Escolha]</option>
                            <option value="Normal" <?php if ($_smarty_tpl->tpl_vars['linha']->value['perfilFacial']=="Normal"){?> selected <?php }?>>Normal</option>
                        <option value="Côncavo" <?php if ($_smarty_tpl->tpl_vars['linha']->value['perfilFacial']=="Côncavo"){?> selected <?php }?>>Côncavo</option>
                        <option value="Convexo" <?php if ($_smarty_tpl->tpl_vars['linha']->value['perfilFacial']=="Convexo"){?> selected <?php }?>>Convexo</option>
                        </select>
                    </div>
                </div>
                <h2>Extrabucal</h2>
                <hr />
                <div class="grid-12-12">
                    <label>Localização e descrição:</label>
                    <textarea class="txt bradius" id="local" name="extraBucal"><?php echo $_smarty_tpl->tpl_vars['linha']->value['extraBucal'];?>
</textarea>
                </div>            
                <h2>Intrabucal</h2>
                <hr />
                <h4>Exame dos tecidos moles</h4>
                <div class="grid-6-12">
                    <label for="localizacao">Localização:</label>
                    <input type="text" class="txt bradius" name="localizacao" id="localizacao" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['localizacao'];?>
" />
                </div>
                <div class="grid-6-12">
                    <label for="forma">Forma:</label>
                    <input type="text" class="txt bradius" name="forma" id="forma" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['forma'];?>
" />
                </div>
                <div class="grid-6-12">
                    <label for="tamanho">Tamanho:</label>
                    <input type="text" class="txt bradius" name="tamanho" id="tamanho" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['tamanho'];?>
" />
                </div>
                <div class="grid-6-12">
                    <label for="cor">Cor:</label>
                    <input type="text" class="txt bradius" name="cor" id="cor" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['cor'];?>
" />
                </div>
                <div class="grid-6-12">
                    <label for="superficie">Superfície:</label>
                    <input type="text" class="txt bradius" name="superficie" id="superficie" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['superficie'];?>
" />
                </div>
                <div class="grid-6-12">
                    <label for="consistencia">Consistência:</label>
                    <input type="text" class="txt bradius" name="consistencia" id="consistencia" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['consistencia'];?>
" />
                </div>
                <div class="grid-6-12">
                    <label for="insercao">Inserção:</label>
                    <input type="text" class="txt bradius" name="insercao" id="insercao" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['insercao'];?>
" />
                </div>
                <div class="grid-6-12">
                    <label for="sinais_secundarios">Sinais Secundários:</label>
                    <input type="text" class="txt bradius" name="sinaisSecundarios" id="sinais_secundarios" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['sinaisSecundarios'];?>
" />
                </div>
            </div>
            <div id="exameBtn">
                <a href="Exame.php?exa=<?php echo $_smarty_tpl->tpl_vars['prontuario']->value;?>
" class="btn bradius">Cancelar</a>
                <input type="reset" name="btn_reset" class="btn bradius" value="Limpar" />
                <input type="hidden" name="acao" value="atualizar" />
                <input type="hidden" name="paciente" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['idPaciente'];?>
" />
                <input type="hidden" name="exame" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['idExames'];?>
" />
                <input type="submit" name="btn_cad"  class="btn bradius" value="Atualizar" />
            </div>
        </form>

    </div>
<?php } ?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>