{include file="view/header.tpl"}
{include file="view/menu.tpl"}

<div id="exameFisico" class="bradius" >

    <form id="form_exame" action="" method="post">
        <h2>Exame Físico</h2>

        <div id="exa_paciente">
            <label>Prontuário: {$prontuario}</label>
            <label>Paciente: {$nome}</label>
        </div>
        <h3>Sinais Vitais</h3>
        <hr />
        <div id="sinais">
            <p>
                <label for="pressao">Pressão arterial:</label>
                <input type="text" class="txt bradius" name="pressao" id="pressao" required /> mmHg
            </p>
            <p>
                <label for="frequencia">Frequencia cardíaca:</label>
                <input type="text" class="txt bradius" name="freqCardiaca" id="frequencia" required /> bpm
            </p>
            <p>
                <label for="frequencia">Frequencia respiratória:</label>
                <input type="text" class="txt bradius" name="freqRespiratoria" id="frequencia" required /> fr
            </p>
        </div>
        <div id="padrao">
            <p>
                <label for="pdr_esqueletico">Padrão esquelético:</label>
                <select name="padraoEsqueletico" id="pdr_esqueletico" required>
                    <option value="">[Escolha]</option>
                    <option value="Normocefálico">Normocefálico</option>
                    <option value="Braquicefálico">Braquicefálico</option>
                    <option value="Dolicocefálico">Dolicocefálico</option>
                </select>
            </p>
            <p>
                <label for="perfil_facial">Perfil facial:</label>
                <select name="perfilFacial" id="pdr_esqueletico" required>
                    <option value="">[Escolha]</option>
                    <option value="Normal">Normal</option>
                    <option value="Côncavo">Côncavo</option>
                    <option value="Convexo">Convexo</option>
                </select>
            </p>
        </div>
        <h3>Extrabucal</h3>
        <hr />
        <label>Localização e descrição:</label>
        <textarea rows="6" cols="60" class="txt bradius" id="local" name="extraBucal"></textarea>
        <h3>Intrabucal</h3>
        <hr />
        <h4>Exame dos tecidos moles</h4>
        <p>
            <label for="localizacao">Localização:</label>
            <input type="text" class="txt bradius" name="localizacao" id="localizacao" />
        </p>
        <p>
            <label for="forma">Forma:</label>
            <input type="text" class="txt bradius" name="forma" id="forma" />
        </p>
        <p>
            <label for="tamanho">Tamanho:</label>
            <input type="text" class="txt bradius" name="tamanho" id="tamanho" />
        </p>
        <p>
            <label for="cor">Cor:</label>
            <input type="text" class="txt bradius" name="cor" id="cor" />
        </p>
        <p>
            <label for="superficie">Superfície:</label>
            <input type="text" class="txt bradius" name="superficie" id="superficie" />
        </p>
        <p>
            <label for="consistencia">Consistência:</label>
            <input type="text" class="txt bradius" name="consistencia" id="consistencia" />
        </p>
        <p>
            <label for="insercao">Inserção:</label>
            <input type="text" class="txt bradius" name="insercao" id="insercao" />
        </p>
        <p>
            <label for="sinais_secundarios">Sinais Secundários:</label>
            <input type="text" class="txt bradius" name="sinaisSecundarios" id="sinais_secundarios" />
        </p>
        <div id="exameBtn">
            <a href="Exame.php?exa={$prontuario}" class="btn bradius">Cancelar</a>
            <input type="reset" name="btn_reset" class="btn bradius" value="Limpar" />
            <input type="hidden" name="acao" value="salvar" />
            <input type="hidden" name="paciente" value="{$prontuario}" />
            <input type="submit" name="btn_cad"  class="btn bradius" value="Salvar" />
        </div>
    </form>

</div>

{include file="footer.tpl"}