<?php
/**
 * Created by PhpStorm.
 * User: Grinalda Soares
 * Date: 27/10/2017
 * Time: 16:34
 */

include ('../../../php/conexao/conection.php');

if (isset($_POST)){


    $query = "INSERT INTO utilizador (
                            utilizador_nome, 
                            utilizador_nif, 
                            utilizador_pass
                          )
              VALUES (:nome, :nif, :pass)";

    $statement = $conection ->prepare($query);

    $statement -> bindParam(":nome", $_POST['nome']);
    $statement -> bindParam(":nif", $_POST['nif']);
    $statement -> bindValue(":pass", md5($_POST['pass']));

    $statement->execute();

    if (!empty($statement)){
        echo '<h4>Sucesso!</h4> O seu registro foi efetuado com sucesso';
    }
    else{
        echo 'erro na Inserção';
    }

};