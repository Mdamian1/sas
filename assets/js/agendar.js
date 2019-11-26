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

        if ($(".form-check-input").prop("checked")) {
            console.log($(this).val())
        }
    }
})
