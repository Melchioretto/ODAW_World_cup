<?php
    include("conexao.php");
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cpf= $_POST['cpf'];
    include("conexao.php");
    
    $consult ="INSERT INTO usuarios(`nome`, `email`, `senha`, `cpf`) VALUES ('$nome','$email','$senha','$cpf')";
    $cone = $mysqli->query($consult) or die($mysqli->error);
?>