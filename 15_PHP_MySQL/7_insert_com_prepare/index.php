<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $password, $db);

    $nome = "Suporte de Microfone";
    $descricao = "Novo fabricado na China";

    $stmt = $conn -> prepare("INSERT INTO itens (nome, descricao) VALUES (?,?)");
    $stmt -> bind_param("ss",$nome,$descricao); //s = string, i = integer, d = double 
    $stmt -> execute();
    $conn -> close();