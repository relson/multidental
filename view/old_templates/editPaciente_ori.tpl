{include file="view/menu.tpl"}

{foreach from=$p item=linha}
    <div id="formulario" class="bradius">
        <form name="update_paciente" id="frm_paciente" method="post" action="Paciente.php" enctype="multipart/form-data">
            <h2>Informações do Paciente</h2>
            <h3>Dados Cadastrais</h3>
            <hr />
            <p>
                <label for="prontuario">Prontuário: {$linha.prontuario}</label>
            </p>
            <p>
                <label for="nome">Nome:</label>
            </p>
            <input type="text" class="txt bradius" id="nome" name="nome" value="{$linha.nome}" placeholder="Digite o nome" required />
            <p>
                <label for="sexo">Sexo:</label>
            </p>
            <select name="sexo" id="sexo">
                <option value="">...</option>
                <option value="M" {if $linha.sexo == "M"} selected {/if}>Masculino</option>
                <option value="F" {if $linha.sexo == "F"} selected {/if}>Feminino</option>
            </select>
            <p>
                <label for="dt_nascimento">Data de nascimento:</label>
            </p>
            <input type="text" class="txt bradius" id="dt_nascimento" name="dt_nascimento" value="{$dt_nasc}" required />
            <p>
                <label for="naturalidade">Naturalidade:</label>
            </p>
            <input type="text" class="txt bradius" id="naturalidade" name="naturalidade" value="{$linha.naturalidade}" placeholder="Digite a naturalidade" required />
            <p>
                <label for="est_civil">Estado civil:</label>
            </p>
            <select name="est_civil" id="est_civil">
                <option value="">[Escolha]</option>
                <option value="solteiro" {if $linha.estadoCivil == "solteiro"} selected {/if}>Solteiro(a)</option>
                <option value="casado" {if $linha.estadoCivil =="casado"} selected {/if}>Casado(a)</option>
                <option value="separado" {if $linha.estadoCivil =="separado"} selected {/if}>Divorciado(a)</option>
                <option value="divorciado" {if $linha.estadoCivil =="divorciado"} selected {/if}>Divorciado(a)</option>
                <option value="viuvo" {if $linha.estadoCivil =="viuvo"} selected {/if}>Vi&uacute;vo(a)</option>
                <option value="convivente" {if $linha.estadoCivil =="convivente"} selected {/if}>Convivente</option>
                <option value="outros" {if $linha.estadoCivil =="outros"} selected {/if}>Outros</option>
            </select>
            <p>
                <label for="rg">RG:</label>
            </p>
            <input type="text" class="txt bradius" id="rg" name="rg" value="{$linha.rg}" placeholder="Digite o RG" />
            [Opcional]
            <p>
                <label for="cpf">CPF:</label>
            </p>
            <input type="text" class="txt bradius" id="cpf" name="cpf" value="{$linha.cpf}" placeholder="Digite o CPF" required />
            <p>
                <label for="responsavel">Respons&aacute;vel legal:</label>
            </p>
            <input type="text" class="txt bradius" id="responsavel" name="responsavel" value="{$linha.responsavel}" placeholder="Digite o nome do responsável" />
            [Opcional]
            <p>
                <label for="convenio">Convenio:</label>
            </p>
            <input type="text" class="txt bradius" id="convenio" name="convenio" value="{$linha.convenio}" placeholder="Digite o convenio" required />
            <h3>Contato</h3>
            <hr />
            <p>
                <label for="endereco">Endere&ccedil;o:</label>
            </p>
            <input type="text" class="txt bradius" id="endereco" name="endereco" value="{$linha.rua}" placeholder="Digite o endereço" required />
            <p>
                <label for="numero">N&uacute;mero:</label>
            </p>
            <input type="text" class="txt bradius" id="numero" name="numero" value="{$linha.numero}" placeholder="Digite o número" />
            <p>
                <label for="complemento">Complemento:</label>
            </p>
            <input type="text" class="txt bradius" id="complemento" name="complemento" value="{$linha.complemento}" placeholder="Digite o complemento" />
            [Opcional]
            <p>
                <label for="bairro">Bairro:</label>
            </p>
            <input type="text" class="txt bradius" id="bairro" name="bairro" value="{$linha.bairro}" placeholder="Digite o bairro" required />
            <p>
                <label for="cidade">Cidade:</label>
            </p>
            <input type="text" class="txt bradius" id="cidade" name="cidade" value="{$linha.cidade}" placeholder="Digite a cidade" required />
            <p>
                <label for="uf">UF:</label>
            </p>
            <select name="uf" id="uf">
                <option value="-">-----</option>
                {foreach from=$lista item=uf}
                    <option value="{$uf.sigla}" {if $linha.uf == $uf.sigla} selected {/if}>{$uf.sigla}</option>
                {/foreach}
            </select>
            <p>
                <label for="cep">CEP:</label>
            </p>
            <input type="text" class="txt bradius" id="cep" name="cep" value="{$linha.cep}" placeholder="Digite o CEP" required />
            <p>
                <label for="telefone">Telefone:</label>
            </p>
            <input type="text" class="txt bradius" id="telefone" name="telefone" value="{$linha.telefone}" placeholder="Digite o número do telefone" required />
            <p>
                <label for="celular">Celular:</label>
            </p>
            <input type="text" class="txt bradius" id="celular" name="celular" value="{$linha.celular}" placeholder="Digite o número do celular" required />
            <p>
                <label for="email">e-Mail:</label>
            </p>
            <input type="email" class="txt bradius email" id="email" name="email" value="{$linha.email}" placeholder="Digite o e-mail" required />
                    <p>
            <label for="foto">Foto:</label>
        </p>
        <input type="file" class="txt bradius" id="foto" name="foto" placeholder="Choose a file" />
        <input type="hidden" name="pic" value="{$linha.foto}" />
        <span id="cam">
            <a class="fancycam" data-fancybox-type="iframe" href="foto.php">
                <img src="css/image/photo-icon.png" height="30" width="30" alt="Capturar Imagem" title="Capturar Imagem" />
            </a>
        </span>
            <br />
            <span>
                <a href="Paciente.php" class="btn bradius">Cancelar</a>
                <input type="reset" name="btn_reset" class="btn bradius" value="Limpar" />
                <input type="hidden" name="acao" value="atualizar" />
                <input type="hidden" name="paciente" value="{$linha.prontuario}" />
                <input type="hidden" name="pessoa" value="{$linha.idPessoa}" />
                <input type="submit" name="btn_cad"  class="btn bradius" value="Atualizar" />
            </span>
        </form>
    {/foreach}
</div>

{include file="view/footer.tpl"}