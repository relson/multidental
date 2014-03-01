{include file="view/header.tpl"}
{include file="view/menu.tpl"}

<div id="agenda">
    <div id="tabelamenu">
        <p>Agenda</p>
        <!--<label id="labeldata">Data: </label>
        <input type="text" class="txt bradius" name="datepicker" id="datepicker" />-->
        <a href="Agendamento.php" class="agendamento btn btnAction bradius" data-fancybox-type="iframe">Novo Agendamento</a>
    </div>
    <iframe width='100%' height='900' frameborder='0' src='./inc/agenda/agenda.php'></iframe>
</div>

{include file="view/footer.tpl"}