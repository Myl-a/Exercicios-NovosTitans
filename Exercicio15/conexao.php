<?php
    $dbHost = 'database';
    $dbUser = 'sam_user';
    $dbPassword = 'senha2';
    $dbName = 'novos_titans';

    $conexao = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

    if ($conexao->connect_errno) {
        echo "Erro:".$conexao->connect_error;
    } else {
        echo "<br>Conexão efetuada com sucesso";
    }
?>