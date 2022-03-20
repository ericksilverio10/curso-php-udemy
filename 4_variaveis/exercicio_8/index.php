<?php

$nome = "Erick";
$idade = 18;
$altura = 1.75;
$comidaPreferida = "Pizza";
$solteiro = true;
$familia = ['pai'=>'Evandro','mãe'=>'Rosangela','irmão'=>'Vinicius','tia'=>'Lucia'];

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
print_r($familia);
echo "<br>";
echo "O nome da minha mãe é ", $familia['mãe'];
echo "<br>";
echo "O nome do meu pai é ", $familia['pai'];
echo "<br>";
echo "O nome do meu irmão é ", $familia['irmão'];
echo "<br>";
echo "O nome da minha tia é ", $familia['tia'];
echo "<br>";