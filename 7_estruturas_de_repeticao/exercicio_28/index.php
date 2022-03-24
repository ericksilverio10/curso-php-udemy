<?php

$contador = 4;

while($contador <= 30){
    echo $contador . "<br>";
    if($contador == 24){
        echo "Parando o loop... <br>";
        break;
    }
    $contador += 2;
}