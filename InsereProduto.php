<?php
    $conexao = new mysqli("localhost","root","","loja");
    $codigo     = $_POST["cod"];
    $nome       = $_POST["nome"];
    $quantidade = $_POST["qtd"];
    $sql = "INSERT INTO produto(codigo, nome, quantidade)".
           " VALUES ($codigo,'$nome',$quantidade)";
    $conexao->query($sql);
    $conexao->close();

    $msg = "Produto $nome adicionado na base. Lorem: Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos vel magnam sed sapiente, nam, nesciunt cum soluta dolore natus inventore nobis dolores est. Aliquam magnam earum libero suscipit. Laudantium, quaerat!" ;
    $msg = wordwrap($msg,70);
    mail("adminbd@example.com","Novo Produto",$msg);

    header('Location: favoritos.php');
?>