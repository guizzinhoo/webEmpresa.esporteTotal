<?php
    if (isset($_POST['login'])) {
    $email = $_POST['login'];
    $senha = $_POST['senha'];
    $sql = "SELECT nome FROM usuario WHERE " .
        " email='$email' AND senha = '$senha'";

    $conexao = new mysqli("localhost", "root", "", "loja");
    $consulta = $conexao->query($sql);
    $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
    $conexao->close();

    if (count($resultado) > 0) {
        session_start();
        $_SESSION["usuario"] = $resultado[0]['nome'];
        header('Location: minha-conta.php');
    } else {
        header('Location: minha-conta.php');
    }
} else {
?>
    <?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    
    // Chamando o header em php 
    require_once('header.php')

    ?>

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
                            <form action="" method="post" id="EntrarPainel">
                                <input type="email" name="login" id="" placeholder="E-mail de acesso">
                                <input type="password" name="senha" id="" placeholder="Digite sua senha">
                                <button type="submit" name="senEntrar" class="btn">Entrar</button>
                                <a href="" title="">Esqueceu sua senha?</a>
                            </form>

                            <form action="" method="post" id="CadastroSite">
                                <input type="text" name="nome" id="" placeholder="Nome completo">
                                <input type="password" name="senha" id="" placeholder="Digite sua senha">
                                <input type="email" name="email" id="" placeholder="E-mail de acesso">
                                <button type="submit" name="senCad" class="btn">Cadastre-se</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fim minha conta do site -->

        <!-- Inicio rodape -->
        <footer class="rodape">
            <div class="container">
                <div class="row">
                    <div class="rodape-col-1">
                        <h3></h3>
                        <p></p>
                        <div class="app-logo">
                            <img src="./img/logo esporte total.png" alt="" width="180px">
                        </div>
                    </div>

                    <div class="rodape-col-2">
                        <h3>Mais Informações</h3>
                        <ul>
                            <li>
                                <a href="#">Cupons</a>
                            </li>
                            <li>
                                <a href="#">Política de Privacidade</a>
                            </li>
                            <li>
                                <a href="./contato.html">Contato</a>
                            </li>
                        </ul>
                    </div>
                    <div class="rodape-col-3">
                        <h3>Redes Sociais</h3>
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/">Facebook</a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/">Instagram</a>
                            </li>
                            <li>
                                <a href="https://twitter.com/">Twitter</a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/">Youtube</a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/">LinkedIn</a>
                            </li>
                        </ul>
                    </div>
                    <div class="rodape-col-3 equipe-site">
                        <h3>Equipe</h3>
                        <ul>
                            <li>
                                Luiz Fabrício
                            </li>
                            <li>
                                Ana Julia
                            </li>
                            <li>
                                Guilherme de Paula
                            </li>
                            <li>
                                Enzo C. Barbosa
                            </li>
                            <li>
                                Américo Neto
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <hr>
            <p class="direitos">&#169;Todos os direitos reservados a Esporte Total</p>

        </footer>
        <!-- Fim rodape -->




        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="./js/login.js"></script>
    </body>

    </html>

<?php
}
?>