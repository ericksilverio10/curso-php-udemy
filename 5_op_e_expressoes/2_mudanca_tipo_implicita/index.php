<?php

echo 5 / 2;
echo "<br>";
// 2.5 => float
if(is_float(5/2)){
    echo "É um float!";
    echo "<br>";
}
echo "<br>";
echo 2 . 3;
echo "<br>";
if(is_string(2 . 3)){
    echo "É uma string!";
    echo "<br><br>";
}
// 2 . 3 => "23" => concatenação => string
$nome = "Erick";
$sobrenome = "Silverio";
$nomeCompleto = $nome." ".$sobrenome;
echo "Olá meu nome é $nomeCompleto";

// Olá meu nome é Erick Silverio