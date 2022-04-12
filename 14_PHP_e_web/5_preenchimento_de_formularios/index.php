<?php
    $usuario = [
        'nome' => 'Erick',
        'idade' => '18',
        'profissao' => 'Programador'
    ];
    if($usuario){
        $nome = $usuario['nome'];
        $idade = $usuario['idade'];
        $profissao = $usuario['profissao'];
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
    <form action="">
        <div>
            <input type="text" name="nome" value = "<?=$nome?>">
        </div>
        <div>
            <input type="text" name="idade" value = "<?=$idade?>">
        </div>
        <div>
            <input type="text" name="profissao" value = "<?=$profissao?>">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
        <p><?= $_SERVER['REQUEST_METHOD']?></p>
    </form>
</body>
</html>