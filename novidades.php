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
                            <a href="novidades.php" id="ativado" title="">Novidades</a>
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

    <div class="pg-novidades">
        <div class="container">
            <div class="title">
                <h2>Novidades</h2>
            </div>
            <div class="texto-novidades">
                <p>Se você é um amante de esportes, prepare-se para ficar ligado nas últimas novidades que estão chegando ao nosso site! 
                    Estamos empolgados em anunciar uma série de projetos emocionantes, novos patrocínios de peso, produtos incríveis e 
                    promoções que vão aperfeiçoar sua experiência esportiva. Aqui está o que você não pode perder!
                    Diariamente procuramos formas de elevar a qualidade da vida esportiva de nossos clientes e para termos excelência 
                    nesse nosso objetivo, venho anunciar as nossas novas parcerias com as marcas mais queridas do mundo esportivo, que são 
                    a TurboTrax, SurgeSportswear e ProZone Performance.
                    Veja um pouco do que está por vir com nossas novas parcerias:
                </p>
            </div>

            <div class="row"> <!-- Inicio texto Banner -->
                <div class="col-2 align-center">
                    <h2>TurboTrax</h2>
                    
                    <div class="texto-form">
                        <p>Prepare-se para experimentar o que há de mais avançado no meio nutricional esportivo. Com a TurboTrax, 
                            vamos proporcionar a vocês suplementos, isotônicos e barrinhas proteicas da melhor qualidade para elevar 
                            o nível da sua performance! Veja só um pouco dos produtos que estão por vir:.</p>
                        <img class="sobre-img" src="./img//galeria/suplemento-01.jpg" alt="">
                        <img class="sobre-img" src="./img//galeria/suplemento-02.jpg" alt="">
                        <img class="sobre-img" src="./img//galeria/suplemento-03.jpg" alt="">
                    </div>
                </div>
                <div class="col-2 align-center">
                    <h2>Surge Sportswear</h2>
                    
                    <div class="texto-form">
                        <p>Com certeza você já ficou horas procurando acessórios de qualidade que irão te deixar mais confortáveis e 
                            aptos para a prática do esporte. Então, não poderíamos contar com uma parceira melhor para essa tarefa! 
                        </p>
                        <img class="sobre-img" src="./img//galeria/vestuario-01.jpg" alt="">
                        <img class="sobre-img" src="./img//galeria/vestuario-02.jpg" alt="">
                        <img class="sobre-img" src="./img//galeria/vestuario-03.jpg" alt="">
                    </div>
                </div>

                <div class="col-2 align-center">
                    <h2>ProZone Performance</h2>
                    
                    <div class="texto-form">
                        <p>Para se tornar um atleta de alta performance é crucial uma boa preparação física para estar sempre preparado 
                            na hora do show! Juntamente conosco a ProZone Performance entrega equipamentos esportivos de altíssima qualidade 
                            e extremamente tecnológicos para otimizar seus treinos e te ajudar a alcançar seus sonhados objetivos. </p>
                        <img class="sobre-img" src="./img//galeria/suplemento-01.jpg" alt="">
                        <img class="sobre-img" src="./img//galeria/suplemento-02.jpg" alt="">
                        <img class="sobre-img" src="./img//galeria/suplemento-03.jpg" alt="">
                    </div>
                </div>
                
                

                <!-- Fim Categoria Sobre da Pagina -->

                
            </div>
        </div>

        <!-- Inicio contato do site -->

     <!-- Chamando o footer em php -->
    <?php require_once('footer.php')?>


        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="./js/login.js"></script>
</body>

</html>