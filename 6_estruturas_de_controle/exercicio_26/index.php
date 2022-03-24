<?php

$velocidade = 42.0;
$nome = "Rosangela";
if($velocidade < 40){
    echo "Parabéns, $nome, você está na velocidade correta! <br>";
} else if($velocidade == 40){
    echo "Tome cuidado, $nome!<br>";
} else if($velocidade > 40){
    echo "Você levou uma multa, $nome! Sua velocidade é de $velocidade km/h, o máximo permitido é 40 km/h!<br>";
}
// Você levou uma multa, Rosangela! Sua velocidade é de 42 km/h, o máximo permitido é 40 km/h!