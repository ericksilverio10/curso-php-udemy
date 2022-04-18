<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $password, $db);

$id = 12;
$nome = "Macbook Pro";
$descricao = "Com nenhuma marca";

$stmt = $conn -> prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");
$stmt -> bind_param('ssi',$nome,$descricao,$id);
$stmt -> execute();
$stmt = $conn -> prepare("SELECT * FROM itens");
$stmt -> execute();
$result = $stmt -> get_result();
$dados = $result -> fetch_all();
print_r($dados);

