$(document).ready(function () {

    var camposCadastro = ['#user-nome', '#user-sobrenome', '#user-telefone', '#user-cpf', '#user-rua', '#user-numero', '#user-complemento', '#user-bairro', '#user-cep', '#user-cidade', '#user-usuario', '#user-senha', '#user-conf-senha'],
        k = 0;

    $('#btn-cadastrar').click(verificarCadastro);

    function verificarCadastro(e) {
        e.preventDefault();

        for (var i = 0; i < camposCadastro.length; i++) {
            if ($(camposCadastro[i]).val() == '') {
                $(camposCadastro[i]).css({
                    'border': '1px solid #ff0000'
                });
            }

            if ($(camposCadastro[i]).val() != '') {
                $(camposCadastro[i]).css({
                    'border': '1px solid #ced4da'
                });
                k++
            }
        }

        if ($('#user-data-nasc').val() == 0) {
            $('#user-data-nasc').css({
                'border': '1px solid #ff0000'
            });
        }

        if ($('#user-data-nasc').val() != 0) {
            $('#user-data-nasc').css({
                'border': '1px solid #ced4da'
            });
            k++
        }

        if ($('#user-estado').val() == 0) {
            $('#user-estado').css({
                'border': '1px solid #ff0000'
            });
        }

        if ($('#user-estado').val() != 0) {
            $('#user-estado').css({
                'border': '1px solid #ced4da'
            });
            k++
        }

        if ($('#user-perfil').val() == 0) {
            $('#user-perfil').css({
                'border': '1px solid #ff0000'
            });
        }

        if ($('#user-perfil').val() != 0) {
            $('#user-perfil').css({
                'border': '1px solid #ced4da'
            });
            k++
        }

        if ($('#user-senha').val() != $('#user-conf-senha').val() || $('#user-senha').val() == '') {
            $('#alert-senha').css({
                'display': 'block'
            })

            $('#user-senha').css({
                'border': '1px solid #ff0000'
            })

            $('#user-conf-senha').css({
                'border': '1px solid #ff0000'
            })
        }

        if ($('#user-senha').val() == $('#user-conf-senha').val() && $('#user-senha').val() != '') {
            $('#alert-senha').css({
                'display': 'none'
            })

            $('#user-senha').css({
                'border': '1px solid #ced4da'
            })

            $('#user-conf-senha').css({
                'border': '1px solid #ced4da'
            })

            if (k == 16) {
                cadastrar();
            }
        }

        var email = $("#user-email").val();

        var emailRegExp = /^(([^<;>;()[\]\\.,;:\s@\"]+(\.[^<;>;()[\]\\.,;:\s@\"]+)*)|(\".+\"))@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/
        if (emailRegExp.test(email)) {
            $('#alert-user-email').css({
                'display': 'none'
            });
            $('#user-email').css({
                'border': '1px solid #ced4da'
            });
        } else {
            $('#alert-user-email').css({
                'display': 'block'
            });
            $('#user-email').css({
                'border': '1px solid #ff0000'
            });
        }

    }

    function cadastrar() {
        $.ajax({
            url: "cadastrarUser",
            type: "POST",
            data: $('#form-new-user').serialize(),
            dataType: "json"
        }).done(function (result) {
            if (result == "Pessoa cadastrada com sucesso") {
                window.location.href = "http://localhost/sas/admin/users";
            }
        })
    }

});
