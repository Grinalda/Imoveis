/**
 * Created by Grinalda Soares on 18/10/2017.
 */

$(document).ready(function () {
    carregarUtilizadores();

    $('#btNewUser').on('click',function (){
        $('.areaMoreInfo').removeClass('out');
    });
    $('#btCancel, .btclose').click(function () {
        $('.areaMoreInfo').addClass('out');
    });

});

function carregarUtilizadores() {
    var table = $('#example23').DataTable({
        "bDeferRender": true,
        "processing" : true,

        "ajax": {
            "url": "php/utilizador.php",
            "type": "POST"
        },
        "columns": [
            { "data": "nome" },
            { "data": "nif" },
            { "data": "dataReg" },
            { "data": "estado" },
            { "data": "acao" }

        ]
    });
}

$('#btSave').on('click', function () {
    if (validation1($('#formUtilizador input'))){

        // Validar Senha mínimo 6 caracteres
         if(($('#formUtilizador #nif').val().length < 9)){
            $('#nif').closest('.form-group').addClass('has-error');
            $('#alerttopright')
                .addClass('show')
                .find('.textAlert').html('<h4>Erro!</h4> Introduza um NIF válido');
        }
        // Validar Senha se coincide com confirmar Srnha
        else if(($('#formUtilizador #pass').val() != $('#formUtilizador #confPass').val())){

            $('#pass, #confPass').closest('.form-group').addClass('has-error');
            $('#alerttopright')
                .addClass('show')
                .find('.textAlert').html('<h4>Erro!</h4> Senha e Confirmar Senha não coincidem.');
        }

        // Enviar requisição

        else{
             var dados = $('#formUtilizador').serialize();

                $.ajax({
                  url: "php/RegUtilizador.php",
                  method: "POST",
                  data: dados,
                  type: "json",
                  success: function (data) {
                      $('#formUtilizador')[0].reset();

                      $('#alerttopright')
                          .addClass('show')
                          .removeClass('alert-danger')
                          .addClass('alert-success')
                          .find('.textAlert').html(data);
                      // table.ajax.reload();
                  },
                  error: function (data) {
                     console.log('erro' +data);
                  }
              });

         }
    }

});