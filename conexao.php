<?php
    session_start();  

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "loja";


    $conexao = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conexao->connect_error) {
        die("Falha na conexão: " . $conexao->connect_error);
    }

?>