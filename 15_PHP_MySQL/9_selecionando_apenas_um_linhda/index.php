<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $password, $db);

$id = 9;

$stmt = $conn -> prepare("SELECT * FROM itens WHERE id = ?");
$stmt -> bind_param('i', $id);
$stmt -> execute();
$result = $stmt -> get_result();
$dado = $result -> fetch_row();
print_r($dado);