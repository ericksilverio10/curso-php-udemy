<?php
    if(isset($_FILES)){
        $imagem = $_FILES;
        print_r($imagem);
        echo "<br><br>";
        $size = $imagem['imagem']['size'];
        $fileName = $imagem['imagem']['name'];
        $type = $imagem['imagem']['type'];
        echo "<strong>Nome do arquivo:</strong> $fileName <br>";
        echo "<strong>Tamanho do arquivo:</strong> $size KB<br>";
        echo "<strong>Tipo do arquivo:</strong> $type <br><br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <form action="index.php" method="POST" enctype= "multipart/form-data">
        <div>
            <input type="file" name="imagem">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>