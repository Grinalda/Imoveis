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
    $query = "SELECT * FROM gip.utilizador ORDER BY  utilizador_id";

    $statement = $conection->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $tabela = "";

    foreach ($result as $row) {

       $desativar = '<a href="#" name= "desativar" id="'.$row['utilizador_id'].'">'.
        '<i class="fa fa-close text-danger"></i> '.
                      '</a>';

        if ($row["utilizador_estado"] = 1) $estado = "Activo";
        else $estado = "desativado";

       $tabela[] = [
            "nome" =>$row["utilizador_nome"],
            "nif"  => $row["utilizador_nif"],
            "dataReg"  => $row["utilizador_dataReg"],
            "estado"  => $estado,
            "acao"  => $desativar
           ];
    }

    echo json_encode([ "data" => $tabela]);
}

