<?php

$host = "localhost";
$dbname = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

$stmt = $conn -> prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");
$nome = "Suporte Monitor Apple";
$descricao = "Importado dos EUA";
$id = 13;
$stmt->bindParam(":nome",$nome);
$stmt->bindParam(":descricao",$descricao);
$stmt->bindParam(":id",$id);
$stmt->execute();