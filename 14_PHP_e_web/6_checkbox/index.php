<?php

    if(isset($_POST['ingredientes'])){
        $ingredientes = $_POST['ingredientes'];
        print_r($ingredientes);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>
</head>
<body>
    <form action="index.php" method= "POST">
        <div>
            <input type="checkbox" name="ingredientes[]" value= "Cenoura">Cenoura
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value= "Abóbora">Abóbora
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value= "Tomate">Tomate
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value= "Beterraba">Beterraba
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value= "Alface">Alface
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>