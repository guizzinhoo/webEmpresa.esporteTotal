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
                            <a href="sobre.php" id="ativado" title="">Sobre</a>
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

    <!-- Inicio contato do site -->

    <div class="pg-sobre">
        <div class="container">
            <div class="title">
                <h2>Sobre</h2>
            </div>
            <div class="row"> <!-- Inicio texto Banner -->
                <div class="col-2 align-center">
                    <h2>Fundação da empresa</h2>
                    <div class="texto-form">
                        <p>Em 2007, cinco amigos apaixonados por esportes e bem-estar decidiram transformar sua paixão em um empreendimento.
                            Luiz Fabrício, Ana Julia, Guilherme de Paula, Enzo Barbosa e Américo Neto, todos com diferentes habilidades e interesses,
                            uniram-se para criar a Esporte Total, uma loja online que ofereceria uma gama completa de produtos para entusiastas do esporte e fitness.

                            A Esporte Total começou em um pequeno escritório alugado, com um site simples mas funcional. Eles começaram vendendo suplementos alimentares e
                            rapidamente expandiram para equipamentos de academia e roupas esportivas. A dedicação dos fundadores e a qualidade dos produtos rapidamente chamaram
                            a atenção do público.</p>

                        Com o passar dos anos, a empresa cresceu exponencialmente.

                        <p>Em 2010, já era uma referência no mercado online de produtos esportivos. A Esporte Total
                            se destacava pela facilidade de navegação em seu site, atendimento ao cliente excepcional e entrega rápida, o que lhe rendeu uma base de clientes fiéis.</p>

                        <p> Em 2015, a Esporte Total já tinha filiais nas principais cidades do Brasil, como São Paulo, Rio de Janeiro, Belo Horizonte e Porto Alegre.
                            A empresa também começou a patrocinar eventos esportivos e atletas, aumentando ainda mais sua visibilidade e reputação.</p>

                        <p>Hoje, a Esporte Total é mais do que uma loja online; é uma marca que representa um estilo de vida saudável e ativo. Com uma variedade de
                            produtos que vão desde roupas de academia até equipamentos para esportes como boxe, a empresa continua a inovar, sempre mantendo os valores
                            de seus fundadores: paixão pelo esporte, compromisso com a qualidade e um forte espírito de equipe.</p>
                    </div>
                </div>
                <div class="col-2 align-center">
                    <img class="sobre-img" src="./img/primeira-loja-esporte-total.png" alt="">
                    <img class="sobre-img" src="./img/Fundadores-site-empresa-av4.png" alt="">
                </div>

                <!-- Fim Categoria Sobre da Pagina -->

                <!-- Inicio Categoria Nosso Objetivo da Pagina -->

                <div class="row">
                    <div class="col-2 align-center">
                        <h2>Missão</h2>

                        <div class="texto-form">
                            <img class="img-sobre-2" src="img/anos2000.jpg">
                            <p>Nossa empresa foi concebida com a missão de desafiar e transformar o ideal de magreza extrema, 
                                que vinha impondo uma série de consequências negativas e afetando a população de maneira direta e indireta. 
                            </p>
                        </div>
                        
                    </div>
                
                    <div class="col-2 align-center">
                        <h2>Nosso objetivo</h2>

                            <div class="texto-form">
                                No mundo atual, é visivel a disparidade de pessoas que valorizam o corpo e sabem o benefício de uma boa forma. <br>
                                A Esporte Total foi criada para atender as demandas daqueles que não possuem condição, mas permanecem com desejo de se superar e alcançar um corpo que desejam.
                            </div>
                            <img class="img-sobre" src="img/ok.jpg">
                            <div>
                                <strong>"Temos o proposito de incentivar sempre a saúde e boa forma"</strong> <br> <small> Palavras de um de nossos sócios</small>
                            </div>
                    </div>


                </div> <!--========== Fim texto banner ==========-->
            </div>
        </div>

        <!-- Inicio contato do site -->

        <!-- Chamando o footer em php -->
        <?php require_once('footer.php') ?>




        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="./js/login.js"></script>
</body>

</html>