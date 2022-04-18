<?php

$host = "localhost";
$dbname = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

$stmt = $conn -> prepare("SELECT * FROM itens WHERE id > :id");
$id = 4;
$stmt -> bindParam(":id",$id);
$stmt -> execute();
$dados = $stmt -> fetchAll(PDO::FETCH_ASSOC); //PDO::FETCH_ASSOC = retorna um array associativo
print_r($dados);