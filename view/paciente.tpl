{include file="header.tpl"}
{include file="menu.tpl"}

{foreach from=$p item=linha}
    <div id="paciente" class="bradius">
        <h2>Informações do Paciente</h2>
        <hr />
        <p>
            <label for="nome">Nome:</label>
            <input type="text" class="" id="nome" name="nome" value="{$linha.nome}" />
        </p>
        
    </div>
{/foreach}

{include file="footer.tpl"}