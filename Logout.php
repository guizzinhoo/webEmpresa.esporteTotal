<?php
   session_start();
   unset($_SESSION["usuario"]);
   header("Location: minha-conta.php");
?>