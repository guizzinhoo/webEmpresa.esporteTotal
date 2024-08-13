<?php
    session_start(); 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "loja";


    $conexao = new mysqli("localhost", "root", "", "loja");

    // Verifica a conexão
    if ($conexao->connect_error) {
        die("Falha na conexão: " . $conexao->connect_error);
    }
?>