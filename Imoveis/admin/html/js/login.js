/**
 * Created by Grinalda Soares on 31/10/2017.
 */

$('#btSave').on('click', function () {
    if (validation1($('#loginform input'))){

        var dados = $('#loginform').serialize();

        $.ajax({
            url: "html/php/login.php",
            method: "POST",
            data: dados,
            type: "json",
            success: function (data) {

                if (data){
                    // Esvazia o formulário
                    $('#loginform')[0].reset();
                    // Mostra mensagem de Sucesso
                    $('#alerttopright')
                        .addClass('show')
                        .removeClass('alert-danger')
                        .addClass('alert-success')
                        .find('.textAlert').html('Autenticação Feita com sucesso!');
                    // Reedmensiona para página Participação depois de e seg
                    setTimeout(function(){
                        location.href = "html/dasboard.php";
                    }, 1000)
                }
                else{
                    $('#alerttopright')
                        .addClass('show')
                        .removeClass('alert-success')
                        .addClass('alert-danger')
                        .find('.textAlert').html('Email e/ou palavra pass não existem');
                }

            },
            error: function (data) {
                console.log('erro' +data);
            }
        });

        }

});