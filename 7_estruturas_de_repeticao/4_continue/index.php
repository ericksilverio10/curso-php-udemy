<?php

$a = 40;

while($a > 0){

    if($a == 12 || $a == 17){
        echo "Pulou a execução $a <br>";
        $a--;
        continue; //pula uma instrução
    }
    echo "Executando o loop $a <br>";
    if($a == 12){
        echo "Terminando o loop break";
        break;
    }

    $a--;    
}