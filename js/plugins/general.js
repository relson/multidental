$(function() {
    $("#f-exemplo").validate({
        //debug:true, //retira essa linha, para o form voltar a funcionar  
        rules: {
            "cpf": {
                cpf: 'both' //valida tanto Formatação como os Digitos  
                        //caso não queira validar a formatação use => cpf: 'valid'  
                        //caso só queira validar a formatação use => cpf: 'format'  
            },
            "cnpj": {
                cnpj: 'both' //valida tanto Formatação como os Digitos  
            }
        }
    });
});

function checkAll(o) {
    var boxes = document.getElementsByTagName("input");
    for (var x = 0; x < boxes.length; x++) {
        var obj = boxes[x];
        if (obj.type === "checkbox") {
            if (obj.name !== "chkAll")
                obj.checked = o.checked;
        }
    }
}

$(document).ready(function(){
    $('#cpf').mask("999.999.999-99");
    $('#cep').mask("99999-999");
    $('#validade').mask("99/9999");
    $('#telefone', '#telcom', '#celular').mask("(99)9999-9999");
});