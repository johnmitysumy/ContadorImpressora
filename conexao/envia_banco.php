<?php

function enviarValorParaBanco($valor, $contador) {
    // Configurações de conexão com o banco de dados
    include('conexao/db.php');
    
    //date agora
    $date = date('Y-m-d H:i:s');

    // Prepara a consulta SQL para inserir o valor na tabela
    $sql = "INSERT INTO log_diario (ip, contador, time) 
    VALUES (
        '$valor',
        '$contador',
        '$date'
        )";     

    // Executa a consulta
     if ($conexao->query($sql) === TRUE) {
        
    } else {
        
    }

    // Fecha a conexão com o banco de dados
    $conexao->close();
}


?>