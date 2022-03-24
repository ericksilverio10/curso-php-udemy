<?php

$i = 0;
$c = "Variavel teste";
while($i <= 10){
    echo "Loop Externo $i <br>";
    echo $c . "<br>";
    $j = 0;
    while($j <= 10){
        echo "Loop Interno $j <br>";
        $j++;
    }
    $i++;
}