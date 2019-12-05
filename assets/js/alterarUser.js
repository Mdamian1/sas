$(document).ready(function () {
    $('#btn-alterar-user').click(verificarCampos)

    var campos = ['#user-nome', '#user-sobrenome', '#user-data-nasc', '#user-telefone', '#user-email', '#user-cpf', '#user-rua', '#user-numero', '#user-complemento', '#user-bairro', '#user-cep', '#user-cidade'],
        k = 0;

    function verificarCampos(e) {
        e.preventDefault();

        for (var i = 0; i < campos.length; i++) {
            if ($(campos[i]).val() == '') {
                $(campos[i]).css({
                    border: '1px solid #ff0000'
                })
            }

            if ($(campos[i]).val() != '') {
                $(campos[i]).css({
                    border: '1px solid #ced4da'
                })
                k++
            }
        }

        if ($('#user-estado').val() == 0) {
            $('#user-estado').css({
                border: '1px solid #ff0000'
            })
        }

        if ($('#user-estado').val() != 0) {
            $('#user-estado').css({
                border: '1px solid #ced4da'
            })
            k++
        }
        
        if (k == 13) {
            alterarUser();
        }
    }
    
    function alterarUser() {
        $.ajax({
            url: "../alteraUser",
            type: "POST",
            data: $('#form-alt-user').serialize(),
            dataType: "json"
        }).done(function (result) {
            if (result.putEndereco == true && result.putPessoa == true) {
                window.location.href = '../user/' + $('#user-id-pessoa').val()
            }
        })
    }
})
