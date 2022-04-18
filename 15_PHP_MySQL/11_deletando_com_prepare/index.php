<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $password, $db);

$id = 2;

$stmt = $conn -> prepare("DELETE FROM itens WHERE id = ?");
$stmt -> bind_param('i', $id);
$stmt -> execute();

$stmt = $conn -> prepare("SELECT * FROM itens");
$stmt -> execute();

$result = $stmt -> get_result();
$dados = $result -> fetch_all();

print_r($dados);

$conn -> close();