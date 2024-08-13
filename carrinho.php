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
                            <a href="contato.php" title="">Contato</a>
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



    <!-- Inicio carrinho de compras do site -->
    <div class="corpo-categorias carrinho-compras">
        <!-- Inicio tabela compras do site -->
        <table>
            <tr>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Valor</th>
            </tr>

            <!-- Inicio item do carrinho -->
            <tr>
                <td>
                    <div class="info-carrinho">
                        <img src="./img/carrinho/carrinho-1.1.jpeg" alt="">
                        <div>
                            <p>Esporte Total</p>
                            <small>Valor: R$ 334</small>
                            <br>
                            <a href="" title="">Remover</a>
                        </div>
                    </div>
                </td>
                <td>
                    <form action="" method="post"></form>
                    <input type="number" name="" id="" value="1">
                </td>
                <td>
                    R$ 334
                </td>
            </tr>
            <!-- Fim item do carrinho -->
            <!-- Inicio item do carrinho -->
            <tr>
                <td>
                    <div class="info-carrinho">
                        <img src="./img/carrinho/carrinho-1.2.jpeg" alt="">
                        <div>
                            <p>Esporte Total</p>
                            <small>Valor: R$ 334</small>
                            <br>
                            <a href="" title="">Remover</a>
                        </div>
                    </div>
                </td>
                <td>
                    <form action="" method="post"></form>
                    <input type="number" name="" id="" value="1">
                </td>
                <td>
                    R$ 334
                </td>
            </tr>
            <!-- Fim item do carrinho -->

            <!-- Inicio item do carrinho -->
            <tr>
                <td>
                    <div class="info-carrinho">
                        <img src="./img/carrinho/carrinho-1.3.jpeg" alt="">
                        <div>
                            <p>Esporte Total</p>
                            <small>Valor: R$ 334</small>
                            <br>
                            <a href="" title="">Remover</a>
                        </div>
                    </div>
                </td>
                <td>
                    <form action="" method="post"></form>
                    <input type="number" name="" id="" value="1">
                </td>
                <td>
                    R$ 334
                </td>
            </tr>
            <!-- Fim item do carrinho -->



        </table>
        <!-- Fim tabela compras do site -->

        <!-- Inicio valor total -->
        <div class="valor-total">
            <table>
                <tr>
                    <td>Sub-Total</td>
                    <td>R$ 142</td>
                </tr>

                <tr>
                    <td>Frete</td>
                    <td>R$ 42</td>
                </tr>

                <tr>
                    <td>Total</td>
                    <td>R$ 184</td>
                </tr>
            </table>
        </div>

        <!-- Fim valor total -->



    </div>


    <!-- Fim carrinho de compras do site -->







    </div>

    <!-- Chamando o footer em php -->
    <?php require_once('footer.php') ?>
</body>

</html>