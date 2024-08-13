<?php
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["imagem"]["name"]);
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        die("Arquivo já existente");
    }
    move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file);

    $conexao = new mysqli("localhost","root","","loja");
    $codigo  = $_POST["cod"];
    $sql = "UPDATE produto SET imagem = '$target_file' WHERE codigo=$codigo";
    $conexao->query($sql);
    $conexao->close();

    header('Location: favoritos.php');
?>