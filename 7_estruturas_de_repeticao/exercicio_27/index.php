<?php

$lista = [90, "Erick", 1.982, true, false, "Ola mundo", [], "Rosangela", -810, "Cesao", 1812091, "Julia", "Matheus"];

$x = count($lista);
$y = 0;

while($y < $x){
    if(is_string($lista[$y])){
        echo $lista[$y] . "<br>";
    }
    $y++;
}