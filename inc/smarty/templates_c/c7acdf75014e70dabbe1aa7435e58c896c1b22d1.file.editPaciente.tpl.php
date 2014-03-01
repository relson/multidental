<?php /* Smarty version Smarty-3.1.14, created on 2013-11-19 11:12:28
         compiled from "view\editPaciente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1643152860011570071-23360846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7acdf75014e70dabbe1aa7435e58c896c1b22d1' => 
    array (
      0 => 'view\\editPaciente.tpl',
      1 => 1384870336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1643152860011570071-23360846',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52860011691804_63621879',
  'variables' => 
  array (
    'p' => 0,
    'linha' => 0,
    'dt_nasc' => 0,
    'lista' => 0,
    'uf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52860011691804_63621879')) {function content_52860011691804_63621879($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("view/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php  $_smarty_tpl->tpl_vars['linha'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linha']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['p']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['linha']->key => $_smarty_tpl->tpl_vars['linha']->value){
$_smarty_tpl->tpl_vars['linha']->_loop = true;
?>
    <div id="formulario" class="bradius">
        <form class="formee" id="frm_paciente" method="post" action="Paciente.php" enctype="multipart/form-data">
            <h3>Cadastrar Paciente</h3>
            <h2>Dados Cadastrais</h2>
            <hr />
            <div id="cadFormulario">
                <div class="grid-4-12">
                    <label for="nome">Nome: <em class="formee-req">*</em></label>
                    <input type="text" class="txt bradius" id="nome" name="nome" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['nome'];?>
" placeholder="Digite o nome" required />
                </div>
                <div class="grid-2-12">
                    <label for="sexo">Sexo: <em class="formee-req">*</em></label>
                    <select name="sexo" id="sexo">
                        <option value="">[Escolha]</option>
                        <option value="M" <?php if ($_smarty_tpl->tpl_vars['linha']->value['sexo']=="M"){?> selected <?php }?>>Masculino</option>
                        <option value="F" <?php if ($_smarty_tpl->tpl_vars['linha']->value['sexo']=="F"){?> selected <?php }?>>Feminino</option>
                    </select>
                </div>
                <div class="grid-2-12">
                    <label for="dt_nascimento">Nascimento: <em class="formee-req">*</em></label>
                    <input type="text" class="txt bradius" id="dt_nascimento" name="dt_nascimento" value="<?php echo $_smarty_tpl->tpl_vars['dt_nasc']->value;?>
" placeholder="Digite a data de nascimento" required />
                </div>
                <div class="grid-4-12">
                    <label for="naturalidade">Naturalidade: <em class="formee-req">*</em></label>
                    <input type="text" class="txt bradius" id="naturalidade" name="naturalidade" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['naturalidade'];?>
" placeholder="Digite a naturalidade" required />
                </div>
                <div class="grid-2-12">
                    <label for="est_civil">Estado civil: <em class="formee-req">*</em></label>
                    <select name="est_civil" id="est_civil">
                        <option value="">[Escolha]</option>
                        <option value="solteiro" <?php if ($_smarty_tpl->tpl_vars['linha']->value['estadoCivil']=="solteiro"){?> selected <?php }?>>Solteiro(a)</option>
                        <option value="casado" <?php if ($_smarty_tpl->tpl_vars['linha']->value['estadoCivil']=="casado"){?> selected <?php }?>>Casado(a)</option>
                        <option value="separado" <?php if ($_smarty_tpl->tpl_vars['linha']->value['estadoCivil']=="separado"){?> selected <?php }?>>Divorciado(a)</option>
                        <option value="divorciado" <?php if ($_smarty_tpl->tpl_vars['linha']->value['estadoCivil']=="divorciado"){?> selected <?php }?>>Divorciado(a)</option>
                        <option value="viuvo" <?php if ($_smarty_tpl->tpl_vars['linha']->value['estadoCivil']=="viuvo"){?> selected <?php }?>>Vi&uacute;vo(a)</option>
                        <option value="convivente" <?php if ($_smarty_tpl->tpl_vars['linha']->value['estadoCivil']=="convivente"){?> selected <?php }?>>Convivente</option>
                        <option value="outros" <?php if ($_smarty_tpl->tpl_vars['linha']->value['estadoCivil']=="outros"){?> selected <?php }?>>Outros</option>
                    </select>
                </div>
                <div class="grid-3-12">
                    <label for="rg">RG:</label>
                    <input type="text" class="txt bradius" id="rg" name="rg" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['rg'];?>
" placeholder="Digite o RG" />
                </div>
                <div class="grid-3-12">
                    <label for="cpf">CPF: <em class="formee-req">*</em></label>
                    <input type="text" class="txt bradius" id="cpf" name="cpf" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['cpf'];?>
" placeholder="Digite o CPF" required />
                </div>
                <div class="grid-4-12">
                    <label for="responsavel">Responsável legal:</label>
                    <input type="text" class="txt bradius" id="responsavel" name="responsavel" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['responsavel'];?>
" placeholder="Digite o nome do responsável" />
                </div>
                <div class="grid-2-12">
                    <label for="convenio">Convenio: <em class="formee-req">*</em></label>
                    <input type="text" class="txt bradius" id="convenio" name="convenio" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['convenio'];?>
" placeholder="Digite o convenio" required />
                </div>
                <div class="grid-4-12">
                    <label for="endereco">Endereço: <em class="formee-req">*</em></label>
                    <input type="text" class="txt bradius" id="endereco" name="endereco" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['rua'];?>
" placeholder="Digite o endereço" required />
                </div>
                <div class="grid-2-12">
                    <label for="numero">Número: <em class="formee-req">*</em></label>
                    <input type="text" class="txt bradius" id="numero" name="numero" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['numero'];?>
" placeholder="Número" />
                </div>
                <div class="grid-4-12">
                    <label for="complemento">Complemento:</label>
                    <input type="text" class="txt bradius" id="complemento" name="complemento" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['complemento'];?>
" placeholder="Digite o complemento" />
                </div>
                <div class="grid-4-12">
                    <label for="bairro">Bairro: <em class="formee-req">*</em></label>
                    <input type="text" class="txt bradius" id="bairro" name="bairro" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['bairro'];?>
" placeholder="Digite o bairro" required />
                </div>
                <div class="grid-4-12">
                    <label for="cidade">Cidade: <em class="formee-req">*</em></label>
                    <input type="text" class="txt bradius" id="cidade" name="cidade" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['cidade'];?>
" placeholder="Digite a cidade" required />
                </div>
                <div class="grid-2-12">
                    <label for="uf">UF: <em class="formee-req">*</em></label>
                    <select name="uf" id="uf">
                        <option value="-">-----</option>
                        <?php  $_smarty_tpl->tpl_vars['uf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['uf']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['uf']->key => $_smarty_tpl->tpl_vars['uf']->value){
$_smarty_tpl->tpl_vars['uf']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['uf']->value['sigla'];?>
" <?php if ($_smarty_tpl->tpl_vars['linha']->value['uf']==$_smarty_tpl->tpl_vars['uf']->value['sigla']){?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['uf']->value['sigla'];?>
</option>
                        <?php } ?>
                    </select>
                </div>
                <div class="grid-2-12">
                    <label for="cep">CEP: <em class="formee-req">*</em></label>
                    <input type="text" class="txt bradius" id="cep" name="cep" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['cep'];?>
" placeholder="Digite o CEP" required />
                </div>
                <div class="grid-2-12">
                    <label for="telefone">Telefone: <em class="formee-req">*</em></label>
                    <input type="text" class="txt bradius" id="telefone" name="telefone" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['telefone'];?>
" placeholder="Digite o número do telefone" required />
                </div>
                <div class="grid-2-12">
                    <label for="celular">Celular: <em class="formee-req">*</em></label>
                    <input type="text" class="txt bradius" id="celular" name="celular" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['celular'];?>
" placeholder="Digite o número do celular" required />
                </div>
                <div class="grid-4-12">
                    <label for="email">e-Mail: <em class="formee-req">*</em></label>
                    <input type="email" class="txt bradius email" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['email'];?>
" placeholder="Digite o e-mail" required />
                </div>
                <div class="grid-4-12">
                    <label for="foto">Foto:
                        <a class="fancycam" data-fancybox-type="iframe" href="foto.php">
                            <img src="css/image/photo-icon.png" height="17" width="17" alt="Capturar Imagem" title="Capturar Imagem" />
                        </a>
                    </label>
                    <input type="file" class="txt bradius" id="foto" name="foto" placeholder="Choose a file" />
                    <input type="hidden" name="pic" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['foto'];?>
" />
                </div>
            </div>
            <div id="botoes">
                <a href="Paciente.php?p=<?php echo $_smarty_tpl->tpl_vars['linha']->value['prontuario'];?>
" class="btn bradius">Cancelar</a>
                <input type="reset" name="btn_reset" class="btn bradius" value="Limpar" />
                <input type="hidden" name="acao" value="atualizar" />
                <input type="hidden" name="paciente" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['prontuario'];?>
" />
                <input type="hidden" name="pessoa" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['idPessoa'];?>
" />
                <input type="submit" name="btn_cad"  class="btn bradius" value="Atualizar" />
            </div>
        </form>
    <?php } ?>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("view/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>