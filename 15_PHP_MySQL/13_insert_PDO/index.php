<?php

    $host = "localhost";
    $dbname = "cursophp";
    $user = "root";
    $pass = "";

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    $stmt = $conn -> prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");

    $nome = "Suporte Monitor";
    $descricao = "Importado da China";

    $stmt -> bindParam(":nome", $nome);
    $stmt -> bindParam(":descricao", $descricao);
    $stmt -> execute();