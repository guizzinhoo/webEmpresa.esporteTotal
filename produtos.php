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
                                <a href="produtos.php" id="ativado" title="">Produtos</a>
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

        <!-- Inicio produtos em destaque -->
        <div class="corpo-categorias">

            <div class="row linha2">
                <h2>Todos</h2>
                <select name="" id="">
                    <option value="">Mais comprados</option>
                    <option value="">Mais classificados</option>
                    <option value="">Menor preço</option>
                    <option value="">Maior preço</option>
                </select>
            </div>

            <!-- Inicio row do corpo do produtos em destaque -->
            <div class="row">
                <!-- Inicio item produtos em destaque -->
                <div class="col-4">
                    <img src="./img/galeria/galeria-1.1.jpg" alt="">
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
                    <h4>Calça Malha Power Blaste</h4>
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

            <!-- Inicio paginação -->
            <div class="paginacao">
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>4</span>
                <span>&#8594;</span>
            </div>
            <!-- Fim paginação -->
        </div>




        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        <!-- Chamando o footer em php -->
        <?php require_once('footer.php') ?>
    </body>

    </html>