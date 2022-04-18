<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $password, $db);

$id = 4;

$stmt = $conn -> prepare("SELECT * FROM itens WHERE id > ?");
$stmt -> bind_param('i', $id); //i = integer
$stmt -> execute();
$result = $stmt -> get_result();
$dados = $result -> fetch_all();
print_r($dados);