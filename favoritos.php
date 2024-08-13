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



    <body>
        <div class="favoritos container">


            <h2 class="title">Listagem de Produtos</h2>


            <table id="table" class="tabela">
                <div class="btn-tabela">
                    <a href="InsereProdutoForm.php" class="btn">Add Produto</a>
                </div>
                <thead class="tabela-int">
                    <tr>
                        <td>Codigo</td>
                        <td>Nome</td>
                        <td>Quantidade</td>
                        <td>Imagem</td>
                        <td>Opcoes</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conexao = new mysqli("localhost", "root", "", "loja");
                    $consulta = $conexao->query("select * from produto");
                    $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
                    foreach ($resultado as $linha) {
                        echo ("<tr><td>" . $linha['codigo'] . "</td>");
                        echo ("<td>" . $linha['nome'] . "</td>");
                        echo ("<td>" . $linha['quantidade'] . "</td>");
                        if ($linha['imagem'])
                            echo ("<td><img src='" . $linha['imagem'] . "' width='30' height='30'></td>");
                        else
                            echo ("<td>&nbsp;</td>");
                        echo ("<td><a href='ProdutoImagemForm.php?cod=" .
                            $linha['codigo'] . "' class='btn btn-sm btn-primary m-1'>Imagem</a>" .
                            "<a href='ExcluirProduto.php?cod=" .
                            $linha['codigo'] . "' class='btn btn-sm btn-danger m-1'>Del</a></td></tr>");
                    }
                    $conexao->close();
                    ?>
                </tbody>
            </table>
        </div>
        <!-- Chamando o footer em php -->
        <?php require_once('footer.php') ?>
    </body>

</html>