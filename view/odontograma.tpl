{include file="view/header.tpl"}
{include file="view/menu.tpl"}

<div id="odontograma" class="bradius">
    <h2>Odontograma</h2>
    <div id="odo_paciente">
        <h3 id="prontuario">Prontuário: {$idPaciente}</h3>
        <h3>Paciente: {$nome}</h3>
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
        <textarea class="txt bradius" id="obs" rows="5" cols="55">{*<!-- PROBLEMA -->*}</textarea>
    </div>
    <div id="botoes_odontograma">
        <a href="Paciente.php?p={$idPaciente}" class="btn bradius">Cancelar</a>
        <input type="reset" name="btn_reset" class="btn bradius" value="Limpar" />
        <input type="hidden" name="acao" value="cadastrar" />
        <input type="submit" name="btn_cad"  class="btn bradius" value="Salvar" />
    </div>
</div>

{include file="view/footer.tpl"}