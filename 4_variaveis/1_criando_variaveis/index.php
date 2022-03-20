<?php

$nome = "Erick";
$idade = 18;
$altura = 1.75;
$comidaPreferida = "Pizza";
$solteiro = true;
if(is_string($nome)){
    echo "$nome é uma string!";
}
if(is_string($comidaPreferida)){
    "$comidaPreferida é uma string!";
}
echo "<br>";
if(is_integer($idade)){
    echo "$idade é um número inteiro!";
}
echo "<br>";
if(is_float($altura)){
    echo "$altura é um float!";
}
echo "<br>";
if(is_bool($solteiro)){
    echo "$solteiro é um booleano!";
}
echo "<br>";