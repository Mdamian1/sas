$(document).ready(function () {
    var dateTime = '', result = '', lista = '', horaMinSeg = '', hora = '', min = '';

    $('#btn-agendar').click(verificarCampos);

    $('#data-agendada').change(verificarHorario);

    function verificarHorario() {
        $.ajax({
            url: "buscarDia",
            type: "POST",
            data: $('#form-cadastro-agendamento').serialize(),
            dataType: "json"
        }).done(function (result) {
            $('#lista-hora').html('');
            result.forEach(montarLista);
            $('#lista-hora').html(lista);
            console.log(lista)
            lista = '';
        })
    }

    function montarLista(value) {
        dateTime = value.data_horario;
        result = dateTime.split(" ");
        horaMinSeg = result[1].split(':');
        hora = horaMinSeg[0];
        min = horaMinSeg[1];
        
        if (value.id_pessoa == null) {
            lista += '<div class="form-check"><input class="form-check-input" type="radio" name="horario" id="' + value.id_agendamento + '" value="' + value.id_agendamento + '"><label class="form-check-label" for="' + value.id_agendamento + '">'+hora+':'+min+'</label></div>';
        } else {
            lista += '<div class="form-check"><input class="form-check-input" type="radio" name="horario" id="' + value.id_agendamento + '" value="' + value.id_agendamento + '" disabled><label class="form-check-label" for="' + value.id_agendamento + '">'+hora+':'+min+'</label></div>';
        }
    }

    function verificarCampos(e) {
        e.preventDefault();
        var k = 0,
            l = 0;

        if ($('#data-agendada').val() == '') {
            $('#data-agendada').css({
                'border': '1px solid #ff0000'
            })
        }

        if ($('#data-agendada').val() != '') {
            $('#data-agendada').css({
                'border': '1px solid #ced4da'
            })
            l++
        }

        for (var i = 0; i < $('input[type=radio]').length; i++) {

            if ($('input[type=radio]')[i].checked) {
                $('#alert-agendamento').css({
                    'display': 'none'
                })

                k++
                l++
            }

            if (k == 0) {
                $('#alert-agendamento').css({
                    'display': 'block'
                })
            }
        }

        if ($('#descricao').val() == '') {
            $('#descricao').css({
                'border': '1px solid #ff0000'
            })
        }

        if ($('#descricao').val() != '') {
            $('#descricao').css({
                'border': '1px solid #ced4da'
            })
            l++
        }

        if (l == 3) {
            cadastrarAgendamento();
        }
    }

    function cadastrarAgendamento() {
        $.ajax({
            url: "cadastrarAgendamento",
            type: "POST",
            data: $('#form-cadastro-agendamento').serialize(),
            dataType: "json"
        }).done(function (result) {
            if (result) {
                $('#fundo-agendamento').html('<h4 class="text-center">Agendamento cadastrado!</h4>')
            } else {
                $('#fundo-agendamento').html('<h4 class="text-center">Falha ao cadastrar agendamento</h4>')
            }
        })
    }
})
