<?php
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
                            <a href="contato.php" id="ativado" title="">Contato</a>
                        </li>
                        <li>
                            <a href="minha-conta.php" title="">Minha Conta</a>
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




    <!-- Inicio contato do site -->
    <div class="minha-conta contato-img">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="./img/banner-contato.png" alt="">
                </div>

                <div class="col-2">
                    <div class="formulario-contato">
                        <div class="btn-form-contato">
                            <h2>Contato</h2>
                            <hr id="Indicador-contato">
                        </div>

                        <!-- Inicio formulario contato -->
                        <form action="https://formsubmit.co/luizfabriciodss@gmail.com" method="POST" id="Contato-email">
                            <div>
                                <input type="text" name="nome" class="focus-contato" placeholder="Nome" required>
                            </div>
                            <div>
                                <input type="email" name="email" class="focus-contato" placeholder="E-mail" required>
                            </div>
                            <div>
                                <textarea id="msg" class="focus-contato" name="mensagem" placeholder="Escreve sua mensagem" required></textarea>
                            </div>
                            <div>
                                <button class="btn" class="focus-contato" type="submit">Enviar</button>
                            </div>
                        </form>
                        <!-- Fim formulario contato -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim contato do site -->


    <!-- Chamando o footer em php -->
    <?php require_once('footer.php') ?>


</body>

</html>