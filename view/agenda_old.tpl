{include file="view/header.tpl"}
{include file="view/menu.tpl"}

<div id="agenda">
    <div id="tabelamenu">
        <p>Agenda</p>
        <label id="labeldata">Data: </label>
        <input type="text" class="txt bradius" name="datepicker" id="datepicker" />
        <a href="Agendamento.php" class="agendamento btn btnAction bradius" data-fancybox-type="iframe">Novo Agendamento</a>
    </div>
    <div id="container_agenda">
        <table>

            {foreach $dados as $linha}
                <tr colspan="4">
                    <td id="agendaHora">{$linha.hora}</td>
                    <td id="agendamento"></td>
                </tr>
            {/foreach}
        </table>
    </div>
</div>

{include file="view/footer.tpl"}


{*<td id="agenda2a" {if $linha.hora == $row.hora}style="background-color: #45bdf9"{/if}>
{if $linha.hora == $row.hora}
<a id="agenda2aA" class="agendamento" href="Agendamento.php?edag={$row.idagendamento}" data-fancybox-type="iframe">
<span id="agendaPaciente">{$row.paciente}</span>
</a>
<a href="">
<img id="agendaImg" src="./css/image/get_info.png" height="20" width="20" alt="Informações" title="Informações" />
</a>
<a href="">
<img id="agendaImg" src="./css/image/settings-icon.png" height="20" width="20" alt="Configurações" title="Configurações" />
</a>
{/if}
</td>*}

{*                    <tr colspan="4">
<td id="agendaHora">8:00</td>
<td id="agendamento"></td>
</tr>
<tr colspan="4">
<td id="agendaHora">8:30</td>
<td id="agendamento"></td>
</tr>
<tr colspan="4">
<td id="agendaHora">9:00</td>
<td id="agendamento"></td>
</tr>
<tr colspan="4">
<td id="agendaHora">9:30</td>
<td id="agendamento"></td>
</tr>
<tr colspan="4">
<td id="agendaHora">10:00</td>
<td id="agendamento"></td>
</tr>
<tr colspan="4">
<td id="agendaHora">10:30</td>
<td id="agendamento"></td>
</tr>
<tr colspan="4">
<td id="agendaHora">11:00</td>
<td id="agendamento"></td>
</tr>
<tr colspan="4">
<td id="agendaHora">11:30</td>
<td id="agendamento"></td>
</tr>
<tr colspan="4">
<td id="agendaHora">12:00</td>
<td id="agendamento"></td>
</tr>
<tr colspan="4">
<td id="agendaHora">12:30</td>
<td id="agendamento"></td>
</tr>
<tr colspan="4">
<td id="agendaHora">13:00</td>
<td id="agendamento"></td>
</tr>
<tr colspan="4">
<td id="agendaHora">13:30</td>
<td id="agendamento"></td>
</tr>
<tr colspan="4">
<td id="agendaHora">14:00</td>
<td id="agendamento"></td>
</tr>
<tr colspan="4">
<td id="agendaHora">14:30</td>
<td id="agendamento"></td>
</tr>
<tr colspan="4">
<td id="agendaHora">15:00</td>
<td id="agendamento"></td>
</tr>
<tr colspan="4">
<td id="agendaHora">15:30</td>
<td id="agendamento"></td>
</tr>
<tr colspan="4">
<td id="agendaHora">16:00</td>
<td id="agendamento"></td>
</tr>
<tr colspan="4">
<td id="agendaHora">16:30</td>
<td id="agendamento"></td>
</tr>
<tr colspan="4">
<td id="agendaHora">17:00</td>
<td id="agendamento"></td>
</tr>
<tr colspan="4">
<td id="agendaHora">17:30</td>
<td id="agendamento"></td>
</tr>
<tr colspan="4">
<td id="agendaHora">18:00</td>
<td id="agendamento"></td>
</tr>*}