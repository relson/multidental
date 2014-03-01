{include file="view/header.tpl"}
{include file="view/menu.tpl"}

<div id="formulario" class="bradius">
    <form class="formee" id="frm_paciente" method="post" action="Paciente.php" enctype="multipart/form-data">
        <h3>Cadastrar Paciente</h3>
        <h2>Dados Cadastrais</h2>
        <hr />
        <div id="cadFormulario">
            <div class="grid-4-12">
                <label for="nome">Nome: <em class="formee-req">*</em></label>
                <input type="text" class="txt bradius" id="nome" name="nome" placeholder="Digite o nome" required />
            </div>
            <div class="grid-2-12">
                <label for="sexo">Sexo: <em class="formee-req">*</em></label>
                <select name="sexo" id="sexo">
                    <option value="">[Escolha]</option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
            </div>
            <div class="grid-2-12">
                <label for="dt_nascimento">Nascimento: <em class="formee-req">*</em></label>
                <input type="text" class="txt bradius" id="dt_nascimento" name="dt_nascimento" placeholder="Digite a data de nascimento" required />
            </div>
            <div class="grid-4-12">
                <label for="naturalidade">Naturalidade: <em class="formee-req">*</em></label>
                <input type="text" class="txt bradius" id="naturalidade" name="naturalidade" placeholder="Digite a naturalidade" required />
            </div>
            <div class="grid-2-12">
                <label for="est_civil">Estado civil: <em class="formee-req">*</em></label>
                <select name="est_civil" id="est_civil">
                    <option value="">[Escolha]</option>
                    <option value="solteiro">Solteiro(a)</option>
                    <option value="casado">Casado(a)</option>
                    <option value="divorciado">Divorciado(a)</option>
                    <option value="viuvo">Viúvo(a)</option>
                    <option value="convivente">Convivente</option>
                    <option value="outros">Outros</option>
                </select>
            </div>
            <div class="grid-3-12">
                <label for="rg">RG:</label>
                <input type="text" class="txt bradius" id="rg" name="rg" placeholder="Digite o RG" />
            </div>
            <div class="grid-3-12">
                <label for="cpf">CPF: <em class="formee-req">*</em></label>
                <input type="text" class="txt bradius" id="cpf" name="cpf" placeholder="Digite o CPF" required />
            </div>
            <div class="grid-4-12">
                <label for="responsavel">Responsável legal:</label>
                <input type="text" class="txt bradius" id="responsavel" name="responsavel" placeholder="Digite o nome do responsável" />
            </div>
            <div class="grid-2-12">
                <label for="convenio">Convenio: <em class="formee-req">*</em></label>
                <input type="text" class="txt bradius" id="convenio" name="convenio" placeholder="Digite o convenio" required />
            </div>
            <div class="grid-4-12">
                <label for="endereco">Endereço: <em class="formee-req">*</em></label>
                <input type="text" class="txt bradius" id="endereco" name="endereco" placeholder="Digite o endereço" required />
            </div>
            <div class="grid-2-12">
                <label for="numero">Número: <em class="formee-req">*</em></label>
                <input type="text" class="txt bradius" id="numero" name="numero" placeholder="Número" />
            </div>
            <div class="grid-4-12">
                <label for="complemento">Complemento:</label>
                <input type="text" class="txt bradius" id="complemento" name="complemento" placeholder="Digite o complemento" />
            </div>
            <div class="grid-4-12">
                <label for="bairro">Bairro: <em class="formee-req">*</em></label>
                <input type="text" class="txt bradius" id="bairro" name="bairro" placeholder="Digite o bairro" required />
            </div>
            <div class="grid-4-12">
                <label for="cidade">Cidade: <em class="formee-req">*</em></label>
                <input type="text" class="txt bradius" id="cidade" name="cidade" placeholder="Digite a cidade" required />
            </div>
            <div class="grid-2-12">
                <label for="uf">UF: <em class="formee-req">*</em></label>
                <select name="uf" id="uf">
                    <option value="-">-----</option>
                    {foreach from=$lista item=uf}
                        <option value="{$uf.sigla}">{$uf.sigla}</option>
                    {/foreach}
                </select>
            </div>
            <div class="grid-2-12">
                <label for="cep">CEP: <em class="formee-req">*</em></label>
                <input type="text" class="txt bradius" id="cep" name="cep" placeholder="Digite o CEP" required />
            </div>
            <div class="grid-2-12">
                <label for="telefone">Telefone: <em class="formee-req">*</em></label>
                <input type="text" class="txt bradius" id="telefone" name="telefone" placeholder="Digite o número do telefone" required />
            </div>
            <div class="grid-2-12">
                <label for="celular">Celular: <em class="formee-req">*</em></label>
                <input type="text" class="txt bradius" id="celular" name="celular" placeholder="Digite o número do celular" required />
            </div>
            <div class="grid-4-12">
                <label for="email">e-Mail: <em class="formee-req">*</em></label>
                <input type="email" class="txt bradius email" id="email" name="email" placeholder="Digite o e-mail" required />
            </div>
            <div class="grid-4-12">
                <label for="foto">Foto:
                    <a class="fancycam" data-fancybox-type="iframe" href="foto.php">
                        <img src="css/image/photo-icon.png" height="17" width="17" alt="Capturar Imagem" title="Capturar Imagem" />
                    </a>
                </label>
                <input type="file" class="txt bradius" id="foto" name="foto" placeholder="Choose a file" />
            </div>
        </div>
        <div id="botoes">
            <a href="Paciente.php" class="btn bradius">Cancelar</a>
            <input type="reset" name="btn_reset" class="btn bradius" value="Limpar" />
            <input type="hidden" name="acao" value="cadastrar" />
            <input type="submit" name="btn_cad"  class="btn bradius" value="Salvar" />
        </div>
    </form>
</div>

{include file="view/footer.tpl"}