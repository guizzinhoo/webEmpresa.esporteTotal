<?php

//Incluindo a conecão com o servidor.
include('conexao.php');


$nome       = $_POST["nome"];
$email      = $_POST["email"];
$senha      = $_POST["senha"];
$sql = "INSERT INTO usuario(nome, email, senha)" .
    " VALUES ('$nome','$email','$senha' )";
$conexao->query($sql);
$conexao->close();

$msg = "Usuario $nome Cadastrado com Sucesso!. ";
$msg = wordwrap($msg, 70);
mail("teste@gmail.com", "Novo Cadastro", $msg);


header('Location: minha-conta.php');
exit();
