<?php
session_start();

//Inclui o arquivo de conexão.
include('conexao.php');

// Validação dos dados recebidos do formulário
if (isset($_POST['login'])) {
	$email = $_POST['login'];
	$senha = $_POST['senha'];

//Verifica se os dados batem com os do servidor.
	$sql = "SELECT nome FROM usuario WHERE " .
		" email='$email' AND senha = '$senha'";

//Executa a consulta.
	$consulta = $conexao->query($sql);

//Obtem os tados da consulta para $resultado.
	$resultado = $consulta->fetch_all(MYSQLI_ASSOC);

//fecha a conxão.
	$conexao->close();
}
//Se os dados estiverem corretos.
if (count($resultado) > 0) {
	session_start();

//Inicia a sessão e direciona para favoritos.php
	$_SESSION["usuario"] = $resultado[0]['nome'];
	header('Location: favoritos.php');

//Caso não, direciona para minha-conta.php.
} else {
	header('Location: minha-conta.php');
	exit();
}
