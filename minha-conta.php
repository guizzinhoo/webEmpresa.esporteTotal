<?php

//incluindo a conecao com o servidor
include('conexao.php');

if (session_status() === PHP_SESSION_NONE) {
session_start();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>E-commerce Esporte Total</title>
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/style.php">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
<div class="novoMenu">
    <!-- Inicio do banner -->
    <div class="container">
        <div class="login-menu">
            <?php
            if (isset($_SESSION["usuario"])) {
                $usuario =  $_SESSION["usuario"];
                echo ("<span>Bem-vindo! $usuario </span>");
                echo ("<a href='Logout.php'>Logout</a>");
            } else {
                echo ("<a href='minha-conta'></a>");
            }
            ?>
        </div>
        <!-- Navegação topo do site -->
        <div class="navbar">
            <!-- Logotipo do site -->
            <div class="logo">
                <a href="index.php"><img src="img/logo esporte total.png" alt="Esporte Total"></a>
            </div>
            <!-- ================= -->
            <!-- Inicio menu navegação topo do site -->
            <nav>
                <ul id="menuNavbar">
                    <li>
                        <a href="index.php" title="">Home</a>
                    </li>
                    <li>
                        <a href="sobre.php" title="">Sobre</a>
                    </li>
                    <li>
                        <a href="produtos.php" title="">Produtos</a>
                    </li>
                    <li>
                        <a href="novidades.php" title="">Novidades</a>
                    </li>
                    <li>
                        <a href="contato.php" title="">Contato</a>
                    </li>
                    <li>
                        <a href="minha-conta.php" id="ativado" title="">Minha Conta</a>
                    </li>
                    <li>
                        <?php
                        if (isset($_SESSION["usuario"])) {
                            $usuario =  $_SESSION["usuario"];
                            echo ("<a href='favoritos.php'> Favoritos</a>");
                        } else {
                        }
                        ?>
                    </li>
                </ul>
            </nav>
            <!-- Fim menu navegação topo do site -->
            <a href="carrinho.php" title="">
                <ion-icon name="bag-outline" class="carrinho"></ion-icon>
            </a>

            <img src="./img/menu.png" alt="" class="menu-celular" onclick="menucelular()"><br>
        </div><!-- Fim Navegação topo do site -->


    </div>
    <!-- Fim container -->
</div>
<!-- Fim banner -->



    <!-- Inicio minha conta do site -->
    <div class="minha-conta">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="./img/banner-futebol.png" alt="">
                </div>

                <div class="col-2">
                    <div class="formulario">
                        <div class="btn-form">
                            <span onclick="Entrar()">Entrar</span>
                            <span onclick="Cadastro()">Cadastro</span>
                            <hr id="Indicador">
                        </div>
                        <form action="login.php" method="post" id="EntrarPainel">
                            <input type="email" name="login" id="login" placeholder="E-mail de acesso">
                            <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
                            <button type="submit" name="senEntrar" class="btn">Entrar</button>
                            <a href="" title="">Esqueceu sua senha?</a>
                        </form>
                        <form action="cadastrar.php" method="post" class="" id="CadastroSite">
                            <label class="form-label"></label>
                            <input type="text" name="nome" placeholder="Nome completo" >
                            <label class="form-label"></label>
                            <input type="email" name="email" placeholder="E-mail de acesso">
                            <label class="form-label"></label>
                            <input type="password" name="senha" placeholder="Digite sua senha">
                            <input type="submit" value="Cadastrar" class="btn">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim minha conta do site -->

    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    

    <!-- Chamando o footer em php -->
    <?php require_once('footer.php')?>

    </body>
    </html>

