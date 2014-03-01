{include file="view/header.tpl"}
{include file="view/menu.tpl"}
<div id="anamnese" class="bradius">

    {foreach from=$p item=linha}
        <form id="frm_form" action="Anamnese.php" method="post">
            <h2>Anamnese</h2>
            <p>
                <label id="paciente" for="paciente">Paciente:</label>
            </p>
            <input type="text" class="txt bradius" id="paciente" name="paciente" value="{$nome}" disabled="true" />

            {*<p>
            <label for="queixa">Queixa principal:</label>
            </p>
            <textarea rows="6" cols="50" class="txt bradius" id="queixa" name="queixa" required>{$linha.queixa}</textarea>
            <p>
            <label for="histDoenca">História da doença atual:</label>
            </p>
            <textarea rows="6" cols="50" class="txt bradius" id="histDoenca" name="histDoenca" required>{$linha.histDoenca}</textarea>*}
            <p>
                <label for="histMedica">História médica:</label>
            </p>
            <textarea rows="6" cols="50" class="txt bradius" id="histMedica" name="histMedica" required>{$linha.histMedica}</textarea>
            <p>
                <label for="histFamiliar">História familiar:</label>
            </p>
            <textarea rows="6" cols="50" class="txt bradius" id="histFamiliar" name="histFamiliar" required>{$linha.histFamiliar}</textarea>
            <p>
                <label for="histPessoal">História pessoal e social:</label>
            </p>
            <textarea rows="6" cols="50" class="txt bradius" id="histPessoal" name="histPessoal" required>{$linha.histPessoal}</textarea>
            <p>
                <label for="histOdontologica">História odontológica:</label>
            </p>
            <textarea rows="6" cols="50" class="txt bradius" id="histOdontologica" name="histOdontologica" required>{$linha.histOdontologica}</textarea>
            <br />
            <div id="anamneseBtn">
                <a href="Paciente.php?p={$idPaciente}" class="btn bradius">Cancelar</a>
                <input type="hidden" name="idPaciente" value="{$idPaciente}" />
                <input type="hidden" name="acao" value="salvar" />
                <input type="hidden" name="idAnamnese" value="{$anamnese}" />
                <input type="reset" name="btn_reset" class="btn bradius" value="Limpar" />
                <input type="submit" name="btn_form"  class="btn bradius" value="Salvar" />
            </div>
        </form>
    {/foreach}
</div>
</div>
{include file="view/footer.tpl"}