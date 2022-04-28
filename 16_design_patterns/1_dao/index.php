<?php

include_once('db.php');

?>

<h1>Insira um carro:</h1>
<form action="process.php" method="POST">
    <div>
        <label for="brand">Insira a marca:</label>
        <input type="text" name="brand" id="brand" placeholder="Digite a marca">
    </div>
    <div>
        <label for="km">Insira a quilometragem:</label>
        <input type="number" name="km" id="km" placeholder="Digite o km">
    </div>
    <div>
        <label for="color">Insira a cor:</label>
        <input type="text" name="color" id="color" placeholder="Digite a cor">
    </div>
    <button type="submit">Enviar</button>
</form>