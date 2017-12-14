/**
 * Created by Grinalda Soares on 24/10/2017.
 */

$(document).ready(function () {
    carregarDados();
    carregarTotal();


});

$('#btCancel, .btclose').click(function () {
    $('.areaMoreInfo').addClass('out');
});


function carregarDados() {
    var table = $('#example23').DataTable({
        "bDeferRender": true,
        "processing" : true,

        "ajax": {
            "url": "php/dasboard.php",
            "type": "POST"
        },
        "columns": [
            { "data": "denuciante" },
            { "data": "quem" },
            { "data": "onde" },
            { "data": "dataReg" },
            { "data": "participacao" },
            { "data": "estado" },
            { "data": "acao" }
        ],
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'pdfHtml5'
        ]
    });


}

function carregarTotal() {
    $.ajax({
        url: "php/dasboardProcess.php",
        type: "post",
        dataType: "json",
        data:{intent : "ListarTotal"},
        success: function (e){
            $('#processoPendente').html(e.dados[0]["pendente"]);
            $('#processoConcluido').html(e.dados[0]["concluido"]);
            $('#processoCurso').html(e.dados[0]["em_curso"]);

            // counter
            $(".counter").counterUp({
                delay: 100,
                time: 1200
            });
        },
        error: function (e) {
            console.log('Erro' + e);
        }
    });
}

// Mais Informações
$(document).on('click','.btMoreInfo',function (){
    // Quando Clica no butão btMoreInfo, a variável pega o id do utilizador
    idUser = $(this).attr("id");

    $.ajax({
        url:"php/dasboard.php",
        type: "post",
        dataType: "json",
        data:{userID : idUser}, // Dados a serem enviados
        success: function (e) {
            $('.areaMoreInfo').removeClass('out'); // Abre a area Mais Informações

            // Preenche os Campos com os dados da requisição
            $('#tipoPess').html(e.dados[0]["tipoPessoa"]);
            $('#nome').html(e.dados[0]["destinatario"]);
            $('#doc').html(e.dados[0]["doc"]);
            $('#nunDoc').html(e.dados[0]["numDoc"]);
            $('#pais').html(e.dados[0]["pais"]);
            $('#profissao').html(e.dados[0]["profissao"]);
            $('#morada').html(e.dados[0]["residencia"]);
            $('#distrito').html(e.dados[0]["distrito"]);
            $('#telefone').html(e.dados[0]["telefone"]);
            $('#email').html(e.dados[0]["email"]);
            $('#tipoPart').html(e.dados[0]["tipoParticipacao"]);
            $('#dataReg').html(e.dados[0]["dataRegPart"]);
            $('#quem').html(e.dados[0]["quem"]);
            $('#dataOcorencia').html(e.dados[0]["dataPartcipacao"]);
            $('#local').html(e.dados[0]["onde"]);
            $('#discricao').html(e.dados[0]["descricao"]);
            $('#estadoProcess').html(e.dados[0]["estadoProcesso"]);
             /*$('#').html(e.dados[0][""]);
             $('#').html(e.dados[0][""]);
             $('#').html(e.dados[0][""]);
             $('#').html(e.dados[0][""]);
             $('#').html(e.dados[0][""]);*/
        }
    })
});

// Se clicar no select selectProcess ,retira a classe de erro no mesmo
$(document).on('click','#selectProcess',function (){
    $(this).removeClass('Select_Error');
});

// Função para editar Estado do Processo
$(document).on('click','.btEditPross',function (){

     // Variável pega o valor da select
    var process = $('#selectProcess').val();
     // Validação, se a select estiver vazia, adiciona a classe de erro
    if ((idUser === "")|| (process === "")){
            $('#selectProcess').addClass('Select_Error');
    }
    else{
        // Envia a requisição
        $.ajax({
            url:"php/dasboard.php",
            type: "post",
            dataType: "json",
            data:{estadoProcess : process, idEdit : idUser},
            success: function (e) {
                location.reload(true);
            }
        })
    }

});

// Editar Estado do Processo
$(document).on('click','.iconEdit',function (){
    $('.hidden').removeClass('hidden');
    $('.articleMaster').addClass('hidden');
});
// toat Nota de Boas Vindas ao Administrador
$.toast({
    heading: 'Bem vindo ao GIP Online',
    text: 'Use o sistema para fazer a gestão de participações registradas.',
    position: 'top-right',
    loaderBg: '#fff',
    icon: 'info',
    hideAfter: 3500,
    stack: 6
});


var idUser; // Variável k receberá o id do utilizador Logado