<?php
    $pessoas = [
    'Erick' => 18,
    'Ana' => 17,
    'Washignton' => 24,
    'Cesar' => 19,
    'Rosangela' => 56,
    'Leonardo' => 25
    ];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 50</title>
</head>
<body>
    <h1>Exercício 50</h1>
    <table border = "1px">
        <tr>
            <th>Nome</th>
            <th>Idade</th>
        </tr>
        <?php foreach($pessoas as $nome => $idade): ?>
        <tr>
            <td><?= $nome; ?></td>
            <td><?= $idade; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
