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



    <!-- Inicio produtos detalhes -->
    <div class="corpo-categorias ver-produto">
        <div class="row">
            <div class="col-2">
                <img src="./img/galeria/galeria-1.1.jpg" alt="" id="produtoImg">
                <!-- Inicio Linha da galeria -->
                <div class="img-linha">

                    <!-- Inicio item galeria -->
                    <div class="img-col">
                        <img src="./img/galeria/galeria-1.1.jpg" alt="" width="100%" class="produtoMiniatura">
                    </div>
                    <!-- Fim item galeria -->

                    <!-- Inicio item galeria -->
                    <div class="img-col">
                        <img src="./img/galeria/galeria-1.2.jpeg" alt="" width="100%" class="produtoMiniatura">
                    </div>
                    <!-- Fim item galeria -->

                    <!-- Inicio item galeria -->
                    <div class="img-col">
                        <img src="./img/galeria/galeria-1.3.jpeg" alt="" width="100%" class="produtoMiniatura">
                    </div>
                    <!-- Fim item galeria -->

                    <!-- Inicio item galeria -->
                    <div class="img-col">
                        <img src="./img/galeria/galeria-1.4.jpeg" alt="" width="100%" class="produtoMiniatura">
                    </div>
                    <!-- Fim item galeria -->
                </div>
                <!-- Fim Linha da galeria -->
            </div>

            <div class="col-2">
                <p>Short microfibra Micron</p>
                <h1>Compre com desconto</h1>
                <h4>R$ 57,90</h4>
                <form action="" method="post">
                    <select name="" id="">
                        <option value="">Selecione o Tamanho</option>
                        <option value="">P</option>
                        <option value="">M</option>
                        <option value="">G</option>
                        <option value="">XG</option>
                        <option value="">XXG</option>
                    </select>

                    <input type="number" name="" id="" value="1">
                    <button type="submit" class="btn">Adicionar ao Carrinho</button>
                </form>

                <h3>Descrição</h3>
                <p>O Short Microfibra Micron redefine o conforto para atividades esportivas e lazer.
                    Com sua microfibra leve e respirável, oferece liberdade de movimento e secagem rápida.
                    Seu design elegante e ajuste ergonômico garantem um visual moderno sem sacrificar a funcionalidade.
                    Ideal para quem valoriza qualidade e estilo em cada detalhe.</p>
            </div>
        </div>
    </div>
    <!-- Fim produtos detalhes -->

    <!-- Inicio titulo produtos detalhes -->
    <div class="corpo-categorias">
        <div class="row linha2">
            <h2>Produtos Relacionados</h2>
            <p>Veja Mais</p>
        </div>
    </div>
    <!-- Fim titulo produtos detalhes -->



    <!-- Inicio produtos em destaque -->
    <div class="corpo-categorias">



        <!-- Inicio row do corpo do produtos em destaque -->
        <div class="row">
            <!-- Inicio item produtos em destaque -->
            <div class="col-4">
                <img src="./img/galeria/produto-09.jpg" alt="">
                <h4>Curso Cobranças Recorrentes</h4>
                <p>R$ 997,90</p>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
            </div>
            <!-- Fim item produtos em destaque -->
            <!-- Inicio item produtos em destaque -->
            <div class="col-4">
                <img src="./img/galeria/produto-10.jpeg" alt="">
                <h4>Curso Cobranças Recorrentes</h4>
                <p>R$ 997,90</p>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
            </div>
            <!-- Fim item produtos em destaque -->
            <!-- Inicio item produtos em destaque -->
            <div class="col-4">
                <img src="./img/galeria/produto-11.jpg" alt="">
                <h4>Curso Cobranças Recorrentes</h4>
                <p>R$ 997,90</p>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
            </div>
            <!-- Fim item produtos em destaque -->
            <!-- Inicio item produtos em destaque -->
            <div class="col-4">
                <img src="./img/galeria/produto-12.jpg" alt="">
                <h4>Curso Cobranças Recorrentes</h4>
                <p>R$ 997,90</p>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
            </div>
            <!-- Fim item produtos em destaque -->
        </div>
        <!-- Fim row do corpo do produtos em destaque -->


    </div>

    <!-- Chamando o footer em php -->
    <?php require_once('footer.php') ?>




    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>