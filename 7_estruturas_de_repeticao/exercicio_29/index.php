<?php

$arr = [10,20,30,40,50,60,70,80,90,100];

$x = count($arr);
$contador = 0;
while($contador < $x){
    $numeroAtual = $arr[$contador];
    
    if($numeroAtual == 30 || $numeroAtual == 40){
        $contador++;
        continue;
    }
    echo $arr[$contador] . "<br>";
    $contador++;
}