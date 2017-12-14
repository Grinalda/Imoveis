<?php
/**
 * Created by PhpStorm.
 * User: Grinalda Soares
 * Date: 24/10/2017
 * Time: 17:25
 */

include ('../../../php/conexao/Conectar.php');

if (isset($_POST["userID"])) {

    $call = new Conectar();

    $query = "SELECT * FROM ver_participacao
    WHERE id = '".$_POST["userID"]."'";

    $statement = $call->getConnection()->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();

    die (json_encode(array("dados" => $result)));
}

else if (isset($_POST["estadoProcess"])) {

     $call = new Conectar();

    $query = "UPDATE participacao SET participacao_processo = '".$_POST["estadoProcess"]."'
    WHERE participacao_id = '".$_POST["idEdit"]."'";

    $statement = $call->getConnection()->prepare($query);
    $statement->execute();

    die (json_encode("sucesso"));
}

elseif (isset($_POST)) {
    $call = new Conectar();

    $output = '';
    $query = "SELECT * FROM ver_participacao ORDER BY dataRegPart DESC";

    $statement = $call->getConnection()->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $tabela = "";

    $estados = ["curso" => 0, "pendente" => 0, "concluido" => 0];

    foreach ($result as $row) {

        if ($row["estadoProcesso"] == "Arquivado"){
            $estado = '<label class = "label label-default">Arquivado</label>';
        }
        else if ($row["estadoProcesso"] == "Em curso"){
            $estado = '<label class = "label label-warning">Em curso</label>';
        }
        else if ($row["estadoProcesso"] == "Concluído"){
            $estado = '<label class = "label label-success">Concluído</label>';
        }
        else {
            $estado = '<label class = "label label-danger">Pendente</label>';
        }

        $desativar = '<a href="#" name= "desativar" class="btMoreInfo" id="'.$row['id'].'">'.
            '<i class="fa fa-info text-info"></i> '.
            '</a>';

        $tabela[] =[
            "denuciante" => $row["destinatario"],
            "quem" => $row["quem"],
            "onde" => $row["onde"],
            "dataReg" => $row["dataRegPart"],
            "participacao" => $row["tipoParticipacao"],
            "estado"=> $estado,
            "acao"=> $desativar
        ];

    }


    echo  json_encode([ "data" => $tabela, "total_estados" =>$estados]);
}

$desativar = "";