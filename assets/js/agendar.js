$(document).ready(function () {
    $('#btn-agendar').click(verificarCampos);

    function verificarCampos(e) {
        e.preventDefault();

        if ($('#data-agendada').val() == '') {
            $('#data-agendada').css({
                'border': '1px solid #ff0000'
            })
        }

        if ($('#data-agendada').val() != '') {
            $('#data-agendada').css({
                'border': '1px solid #ced4da'
            })
        }

        for (var i = 0; i < $('input[type=radio]').length; i++) {
            console.log($(this).i.val())
        }
    }
})
