<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "impressoras";

    // Estabelece a conexão com o banco de dados
    $conexao = new mysqli($host, $username, $password, $database);

    // Verifica se ocorreu algum erro na conexão
    if ($conexao->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
    }

    ?>