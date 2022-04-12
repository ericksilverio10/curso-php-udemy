<?php
    if(isset($_GET['nome'])){
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];
        $maioridade;
        if($idade >= 18){
            $maioridade = "Você é MAIOR de idade!";
        } else{
            $maioridade = "Você é MENOR de idade!";
        }
    } else{
        $nome = "Padrão";
        $idade = "Padrão";
        $maioridade = "Padrão";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bem-vindo, <?= $nome ?></h1>
    <h2>Seu nome é <?= $nome ?> e você tem <?= $idade?> anos!</h2>
    <h2><?=$maioridade?></h2>
</body>
</html>