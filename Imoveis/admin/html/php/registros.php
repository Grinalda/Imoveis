<?php
/**
 * Created by PhpStorm.
 * User: Grinalda Soares
 * Date: 26/10/2017
 * Time: 09:41
 */

include ('../../../php/conexao/conection.php');

if (isset($_POST)) {
    $output = '';
    $query = "SELECT * FROM ver_pessoas ORDER BY  dataReg";

    $statement = $conection->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $tabela = "";

    foreach ($result as $row) {

        if ($row["utilizador_estado"] = 1) $estado = "Activo";
        else $estado = "desativado";

       $tabela[] = [
            "nome" =>$row["nome"],
            "morada"  => $row["morada"],
            "distrito"  => $row["distrito_descricao"],
            "profissao" =>$row["profissao"],
           "telefone"  => $row["telefone"],
            "email"  => $row["email"],
            "dataReg"  => $row["dataReg"]
           ];
    }

    echo json_encode([ "data" => $tabela]);
}

