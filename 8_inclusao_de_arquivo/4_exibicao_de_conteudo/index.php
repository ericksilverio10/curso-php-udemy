<?php

$nome = "Erick";
$sobrenome = "Silverio";

?>

<form action = "">
    <div>
        <label for="nome">Nome: </label>
        <input name = "nome" type="text" value= "<?= $nome; ?> ">
        
    </div>
    <div>
        <label for="sobrenome">Sobrenome: </label>
        <input name = "sobrenome" type="text" value= "<?= $sobrenome; ?> ">
    </div>
    <div>
        <br>
        <input type="submit" value = "Enviar">
    </div>
</form>

<style>

*{
    background-color: blue;
}
label, input{
    color:white;
    text-decoration: none;
    padding: 10px;
}
input, .submit{
    border-radius:10px;
}

</style>