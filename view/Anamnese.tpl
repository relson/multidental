{include file="view/header.tpl"}
{include file="view/menu.tpl"}

<div id="anamnese" class="bradius">
    {foreach from=$p item=linha}
        <form class="formee" id="frm_form" action="Anamnese.php" method="post">
            <h3>Anamnese</h3>
            <div id="nomePaciente">
                <label>Paciente: {$nome}</label>
            </div>
            <hr />
            <div id="anamneseForm">
                {*<div class="grid-12-12">
                    <label for="paciente">Paciente:</label>
                    <input type="text" class="txt bradius" id="paciente" name="paciente" value="{$nome}" disabled="true" />
                </div>*}
                <div class="grid-6-12">
                    <label for="histMedica">História médica:</label>
                    <textarea rows="4" cols="50" class="txt bradius" id="histMedica" name="histMedica" required>{$linha.histMedica}</textarea>
                </div>
                <div class="grid-6-12">
                    <label for="histFamiliar">História familiar:</label>
                    <textarea rows="4" cols="50" class="txt bradius" id="histFamiliar" name="histFamiliar" required>{$linha.histFamiliar}</textarea>
                </div>
                <div class="grid-6-12">
                    <label for="histPessoal">História pessoal e social:</label>
                    <textarea rows="4" cols="50" class="txt bradius" id="histPessoal" name="histPessoal" required>{$linha.histPessoal}</textarea>
                </div>
                <div class="grid-6-12">
                    <label for="histOdontologica">História odontológica:</label>
                    <textarea rows="4" cols="50" class="txt bradius" id="histOdontologica" name="histOdontologica" required>{$linha.histOdontologica}</textarea>
                </div>
            </div>
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