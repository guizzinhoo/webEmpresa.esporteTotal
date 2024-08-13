
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
        <div class="banner novoMenu">
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
                        <a href="index.html"><img src="img/logo esporte total.png" alt="Esporte Total"></a>
                    </div>
                    <!-- ================= -->
                    <!-- Inicio menu navegação topo do site -->
                    <nav>
                        <ul id="menuNavbar">
                            <li>
                                <a href="index.php" id="ativado" title="">Home</a>
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
                                    echo ("<a href='favoritos.php'>Favoritos</a>");
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


                    <img src="./img/menu.png" alt="" class="menu-celular" onclick="menucelular()">
                </div><!-- Fim Navegação topo do site -->


            <div class="row"> <!-- Inicio texto Banner -->
                <div class="col-2">
                    <h1>Mude seu <br>estilo de vida!</h1>
                    <p>“Transforme-se com Esporte Total, viva melhor agora!”</p>
                    <br><a href="novidades.php" class="btn">Mais Informações &#8594;</a>
                </div>
                <div class="col-2 banner-principal">
                    <img  src="./img/banner-principal.png" alt="">
                </div>
            </div> <!--========== Fim texto banner ==========-->
        </div> 
        <!-- Fim container -->
    </div> 
    <!-- Fim banner -->

    <!-- Inicio categorias destaque -->
    <div class="categorias">
        <!-- Corpo categorias -->
        <div class="corpo-categorias">
            <!-- Inicio row caterogias -->
            <div class="row">
                <div class="col-3 col-cat">
                    <img src="./img/categoria-suplementos.jpg" alt="">
                    <h5>Suplementos</h5>
                </div>
                <div class="col-3 col-cat">
                    <img src="./img/categoria-equipamentos.jpg" alt="">
                    <h5>Equipamentos</h5>
                </div>
                <div class="col-3 col-cat">
                    <img src="./img/categoria-vestuario.jpg" alt="">
                    <h5>Vestuário</h5>
                </div>
            </div>
            <!-- Fim row caterogias -->
        </div>
        <!-- Fim Corpo categorias -->

    </div>
    <!-- Fim categorias destaque-->

    <!-- Inicio produtos em destaque -->
    <div class="corpo-categorias">
        <h2 class="title">Produtos em Destaque</h2>

        <!-- Inicio row do corpo do produtos em destaque -->
        <div class="row">
            <!-- Inicio item produtos em destaque -->
            <div class="col-4">
                <a href="ver-produto.php" title="">
                <img src="./img/galeria/galeria-1.1.jpg" alt="">
                </a>
                <h4>Short microfibra Micron</h4>
                <p>R$ 57,90</p>
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
                <img src="./img/galeria/produto-02.jpg" alt="">
                <h4>Bicicleta Ercométrica Voston</h4>
                <p>R$ 899,90</p>
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
                <img src="./img/galeria/produto-03.jpg" alt="">
                <h4>Barras 40cm halteres</h4>
                <p>R$ 199,90</p>
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
                <img src="./img/galeria/produto-04.jpg" alt="">
                <h4>Aparelho banco Musculação</h4>
                <p>R$ 1.199,90</p>
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

        <h2 class="title">Novidades</h2>
        <!-- Inicio row do corpo do produtos em destaque -->
        <div class="row">
            <!-- Inicio item produtos em destaque -->
            <div class="col-4">
                <img src="./img/galeria/produto-05.jpg" alt="">
                <h4>Esteira de caminhada Mecânica Self Machine</h4>
                <p>R$ 899,90</p>
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
                <img src="./img/galeria/produto-06.jpg" alt="">
                <h4>Bike Power Blaster</h4>
                <p>R$ 697,99</p>
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
                <img src="./img/galeria/produto-07.webp" alt="">
                <h4>Suplemento Power Blaster</h4>
                <p>R$ 77,99</p>
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
                <img src="./img/galeria/produto-08.jpg" alt="">
                <h4>Suplemento em pó Power Blaster ultra</h4>
                <p>R$ 89,90</p>
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
                <img src="./img/galeria/produto-09.jpg" alt="">
                <h4>Vit Power Uva</h4>
                <p>R$ 129,90</p>
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
                <h4>Creatina Power Blaster</h4>
                <p>R$ 69,90</p>
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
                <h4>Calça Malha Power Blaster</h4>
                <p>R$ 59,90</p>
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
                <h4>Camisa de Manga Longa Power Blaster</h4>
                <p>R$ 110,99</p>
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
    <!-- Fim produtos em destaque -->
    <!-- Inicio ofertas de produtos -->
    <div class="ofertas">
        <div class="corpo-categorias">
            <div class="row">
                <div class="col-2">
                    <img src="./img/banner-02.png" alt="" class="ofertas-img">
                </div>
                <div class="col-2">
                    <p>Oferta exclusiva da loja</p>
                    <h1>Trenamento intensivo</h1>
                    <small>“Com Esporte Total, alcance o ápice da performance e saúde. Treinamento intensivo para uma vida mais forte e plena.”</small>
                    <br> <br> <a href="carrinho.php" class="btn">Comprar Agora &#8594;</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim ofertas de produtos -->

    <!-- inicio depoimentos -->

    <div class="depoimentos">
        <div class="corpo-categorias">
            <div class="row">
                <!-- Inicio item depoimentos -->
                <div class="col-3">
                    <ion-icon name="ribbon" class="depoimento-icone"></ion-icon>
                    <p>A qualidade da bola de futebol ProMatch é excelente, mas a entrega demorou mais do que o esperado. Mesmo assim, recomendo pelo produto!
                        </p>
                    <div class="classificacao">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div> 
                    <img src="./img/depoimento-01.jpg" alt="">
                    <h3>João Raposo</h3>
                </div>
                <!-- Fim item depoimentos -->
                <!-- Inicio item depoimentos -->
                <div class="col-3">
                    <ion-icon name="ribbon" class="depoimento-icone"></ion-icon>
                    <p>Comprei o tênis de corrida UltraRun 3000 e estou extremamente satisfeito com a compra. 
                        O produto chegou antes do prazo, bem embalado e sem nenhum defeito.</p>
                    <div class="classificacao">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div> 
                    <img src="./img/depoimento-02.jpg" alt="">
                    <h3>Roberta Antunes</h3>
                </div>
                <!-- Fim item depoimentos -->
                <!-- Inicio item depoimentos -->
                <div class="col-3">
                    <ion-icon name="ribbon" class="depoimento-icone"></ion-icon>
                    <p>O kit de musculação HomeGym é completo e robusto. Chegou em perfeitas condições e já estou usando todos os dias. Valeu a pena!</p>
                    <div class="classificacao">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div> 
                    <img src="./img/depoimento-03.jpg" alt="">
                    <h3>Fernanda Santos</h3>
                </div>
                <!-- Fim item depoimentos -->

                <!-- Inicio marcas -->
                <div class="marcas">
                    <div class="corpo-categorias">
                        <div class="row">
                            <div class="col-5">
                                <img src="./img/marca-01.png" alt="">
                            </div>
                            <div class="col-5">
                                <img src="./img/marca-02.png" alt="">
                            </div>
                            <div class="col-5">
                                <img src="./img/marca-03.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fim marcas -->

            </div>
        </div>
    </div>

    <!-- Fim depoimentos -->
 
    
<!-- Chamando o footer em php -->
<?php require_once('footer.php')?>
    
    
    
</body>
</html>