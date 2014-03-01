{include file="view/header.tpl"}
{include file="view/menu.tpl"}

<div id="exameFisico" class="bradius" >

    <form class="formee" id="form_exame" action="" method="post">
        <h3>Exame Físico</h3>
        <div id="fromExame">
            <div id="exa_paciente">
                <label>Prontuário: {$prontuario}</label>
                <label>Paciente: {$nome}</label>
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
                {*<div class="grid-3-12">
                    <label for="frequencia">Frequencia respiratória:</label>
                    <input type="text" class="txt bradius" name="freqRespiratoria" id="frequencia" required /> fr
                </div>*}
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
            <a href="Exame.php?exa={$prontuario}" class="btn bradius">Cancelar</a>
            <input type="reset" name="btn_reset" class="btn bradius" value="Limpar" />
            <input type="hidden" name="acao" value="salvar" />
            <input type="hidden" name="paciente" value="{$prontuario}" />
            <input type="submit" name="btn_cad"  class="btn bradius" value="Salvar" />
        </div>
    </form>

</div>

{include file="footer.tpl"}