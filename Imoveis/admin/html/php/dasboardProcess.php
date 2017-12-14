<?php
/**
 * Created by PhpStorm.
 * User: Grinalda Soares
 * Date: 06/11/2017
 * Time: 15:58
 */

include ('../../../php/conexao/Conectar.php');


$intent["ListarTotal"] = function (){

    $call = new Conectar();
    $output = '';
    $query = "SELECT * from ver_total";

    $statement = $call->getConnection()->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();

    die (json_encode(array("dados" => $result)));
};

$intent[$_POST["intent"]]();