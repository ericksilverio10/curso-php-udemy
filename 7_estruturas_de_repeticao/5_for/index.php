<?php

$nome = "Erick";

// CONTADOR //CONDIÇÃO //INCREMENTO/ DECREMENTO
for($i = 0; $i <= 10; $i++){
    echo $i . "<br>";

    if($i == 4){
        echo $nome."<br>";
    }
    if($i == 8){
        break;
    }
}