<?php

    $nomeJogo = $_POST['nome'];
    $preco = $_POST['preco'];
    $plataforma = $_POST['plataforma'];

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
    <p><?=$nomeJogo?></p>
    <p><?=$preco?></p>
    <p><?=$plataforma?></p>
</body>
</html>