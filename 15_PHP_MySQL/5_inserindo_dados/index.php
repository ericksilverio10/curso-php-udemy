<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $password, $db);


$q = "INSERT INTO itens (nome, descricao) VALUES ('Airpods 2ª Geração', 'Marca Apple')";

$conn->query($q);
$conn->close();