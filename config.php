<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '@25@11@2007!';
    $dbName = 'formulário-luiz';


    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName)

    if ($conexao->connect_errno) {
        echo "erro"
    }

    else {
        echo "conexão efetuada com sucesso"
    }

?>