<?php
   session_start();
   if(isset($_SESSION['usuario'])) {
      $conexao = new mysqli("localhost","root","","loja");
      $codigo  = $_GET["cod"];
      $sql = "DELETE FROM produto WHERE codigo=$codigo";
      $conexao->query($sql);
      $conexao->close();
      header('Location: favoritos.php');
   } else {
      header('Location: Login.php');
   }
?>