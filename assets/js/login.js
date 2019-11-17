$(document).ready(function () {

    $('#btn-login').click(verificaCampos);

    function verificaCampos(e) {
        e.preventDefault();
        var check = 0;

        campos = ['#form-user', '#form-senha'];

        for (var i = 0; i < campos.length; i++) {
            if ($(campos[i]).val() == '') {
                $(campos[i]).css({
                    'border': '1px solid #ff0000'
                });
            }

            if ($(campos[i]).val() != '') {
                $(campos[i]).css({
                    'border': '1px solid #ced4da'
                });

                check++;
            }
        }

        if (check == '2') {
            login();
        }

    }

    function login() {

        $.ajax({
            method: 'POST',
            dataType: 'JSON',
            url: '../Login/fazerLogin',
            data: $('#login-form').serialize()
        }).done(function (data) {

            if (data['boolean'] == 'true') {
                
                switch (data['perfil']) {
                    case '1':
                        window.location.href = "../Admin";
                        break;
                        
                    case '2':
                        window.location.href = "../Client";
                        break;
                        
                    case '3':
                        window.location.href = "../Employee";
                        break;
                }
                
            } else {
                $('#alerta-erro').text(data['mensagem']);
                $('#alerta-erro').css({
                    'display': 'block'
                });
            }

        }).fail(function () {

            alert(1234)

        })

    }

})
