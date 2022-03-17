<?php

class Pessoa{
    function falar($frase){
        echo $frase;
    }
}

$erick = new Pessoa();
$erick -> nome = 'Erick';
echo $erick->nome;
echo "<br>";

echo $erick->falar("Hello world");