{include file="view/header.tpl"}
{include file="view/menu.tpl"}

<div id="formulario" class="bradius">
    <form id="frm_paciente" method="post" action="Paciente.php" enctype="multipart/form-data">
        <h2>Cadastrar Paciente</h2>
        <h3>Dados Cadastrais</h3>
        <hr />
        <p>
            <label for="nome">Nome:</label>
        </p>
        <input type="text" class="txt bradius" id="nome" name="nome" placeholder="Digite o nome" required />
        <p>
            <label for="sexo">Sexo:</label>
        </p>
        <select name="sexo" id="sexo">
            <option value="">[Escolha]</option>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select>
        <p>
            <label for="dt_nascimento">Data de nascimento:</label>
        </p>
        <input type="text" class="txt bradius" id="dt_nascimento" name="dt_nascimento" placeholder="Digite a data de nascimento" required />
        <p>
            <label for="naturalidade">Naturalidade:</label>
        </p>
        <input type="text" class="txt bradius" id="naturalidade" name="naturalidade" placeholder="Digite a naturalidade" required />
        <p>
            <label for="est_civil">Estado civil:</label>
        </p>
        <select name="est_civil" id="est_civil">
            <option value="">[Escolha]</option>
            <option value="solteiro">Solteiro(a)</option>
            <option value="casado">Casado(a)</option>
            <option value="divorciado">Divorciado(a)</option>
            <option value="viuvo">Viúvo(a)</option>
            <option value="convivente">Convivente</option>
            <option value="outros">Outros</option>
        </select>
        <p>
            <label for="rg">RG:</label>
        </p>
        <input type="text" class="txt bradius" id="rg" name="rg" placeholder="Digite o RG" />
        [Opcional]
        <p>
            <label for="cpf">CPF:</label>
        </p>
        <input type="text" class="txt bradius" id="cpf" name="cpf" placeholder="Digite o CPF" required />
        <p>
            <label for="responsavel">Responsável legal:</label>
        </p>
        <input type="text" class="txt bradius" id="responsavel" name="responsavel" placeholder="Digite o nome do responsável" />
        [Opcional]
        <p>
            <label for="convenio">Convenio:</label>
        </p>
        <input type="text" class="txt bradius" id="convenio" name="convenio" placeholder="Digite o convenio" required />
        <h3>Contato</h3>
        <hr />
        <p>
            <label for="endereco">Endereço:</label>
        </p>
        <input type="text" class="txt bradius" id="endereco" name="endereco" placeholder="Digite o endereço" required />
        <p>
            <label for="numero">Número:</label>
        </p>
        <input type="text" class="txt bradius" id="numero" name="numero" placeholder="Digite o número" />
        <p>
            <label for="complemento">Complemento:</label>
        </p>
        <input type="text" class="txt bradius" id="complemento" name="complemento" placeholder="Digite o complemento" />
        [Opcional]
        <p>
            <label for="bairro">Bairro:</label>
        </p>
        <input type="text" class="txt bradius" id="bairro" name="bairro" placeholder="Digite o bairro" required />
        <p>
            <label for="cidade">Cidade:</label>
        </p>
        <input type="text" class="txt bradius" id="cidade" name="cidade" placeholder="Digite a cidade" required />
        <p>
            <label for="uf">UF:</label>
        </p>
        <select name="uf" id="uf">
            <option value="-">-----</option>
            {foreach from=$lista item=uf}
                <option value="{$uf.sigla}">{$uf.sigla}</option>
            {/foreach}
        </select>
        <p>
            <label for="cep">CEP:</label>
        </p>
        <input type="text" class="txt bradius" id="cep" name="cep" placeholder="Digite o CEP" required />
        <p>
            <label for="telefone">Telefone:</label>
        </p>
        <input type="text" class="txt bradius" id="telefone" name="telefone" placeholder="Digite o número do telefone" required />
        <p>
            <label for="celular">Celular:</label>
        </p>
        <input type="text" class="txt bradius" id="celular" name="celular" placeholder="Digite o número do celular" required />
        <p>
            <label for="email">e-Mail:</label>
        </p>
        <input type="email" class="txt bradius email" id="email" name="email" placeholder="Digite o e-mail" required />
        <p>
            <label for="foto">Foto:</label>
        </p>
        <input type="file" class="txt bradius" id="foto" name="foto" placeholder="Choose a file" />
        <span id="cam">
            <a class="fancycam" data-fancybox-type="iframe" href="foto.php">
                <img src="css/image/photo-icon.png" height="30" width="30" alt="Capturar Imagem" title="Capturar Imagem" />
            </a>
        </span>
        <br />
        <span>
            <a href="Paciente.php" class="btn bradius">Cancelar</a>
            <input type="reset" name="btn_reset" class="btn bradius" value="Limpar" />
            <input type="hidden" name="acao" value="cadastrar" />
            <input type="submit" name="btn_cad"  class="btn bradius" value="Salvar" />
        </span>
    </form>
</div>

{include file="view/footer.tpl"}