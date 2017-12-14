<?php
/**
 * Created by PhpStorm.
 * User: Grinalda Soares
 * Date: 31/10/2017
 * Time: 16:46
 */

session_start();
include ('../../../php/conexao/conection.php');


if(isset($_POST["intent"]))
{
    unset($_SESSION["sessao"]);
    die(json_encode('ok'));
}
elseif (isset($_POST)){

    $nif = $_POST['nif'];
    $password = md5($_POST['pass']);

    $query = "SELECT * FROM utilizador WHERE utilizador_nif = '".$nif."' and utilizador_pass = '".$password."'";
    $statement = $conection ->prepare($query);
    $statement->execute();
    // $data = $statement ->fetchAll();

    if ($statement -> rowCount()> 0){
        $data = $statement ->fetch();
        $_SESSION["sessao"] = $data;
        print_r ($data);
    }

    /*$sessao = function (){
        unset($_SESSION["sessao"]);
    };*/
}