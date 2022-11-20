<?php
    $hostname = "localhost";
    $bancodedados = "world_cup";
    $usuario = "root";
    $senha = "";


    $mysqli = new mysqli($hostname,$usuario,$senha,$bancodedados);
    if ($mysqli->connect_errno){
        echo "falha ao conectar...";
    }else{
        echo "conectado :)";
    }
?>