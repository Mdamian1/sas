$(document).ready(function () {
    var text;
    
    $('#form-data').change(getAgendamentos);
    
    function getAgendamentos() {
        $.ajax({
            url: "getAgendamentos",
            type: "POST",
            data: $('#formulario-data').serialize(),
            dataType: "json"
        }).done(function (result) {
            result.forEach(linha);
            $('#agendamento-body').html(text);
            text = '';
        })
    }
    
    function linha(value) {
        var array = value.data_horario.split(" "), data = array[0], hora = array[1];
        
        text += '<tr><th scope="row">'+value.id_agendamento+'</th><td>'+data+'</td><td>'+hora+'</td><td>'+value.cliente+'</td><td>'+value.descricao+'</td></tr>';
    }
})

//[,…]
//0: {id_agendamento: "3", id_pessoa: "2", data_horario: "2019-11-27 10:00:00", descricao: "Lavar Carro",…}
//cliente: "Emily Caroline"
//data_horario: "2019-11-27 10:00:00"
//descricao: "Lavar Carro"
//id_agendamento: "3"
//id_pessoa: "2"