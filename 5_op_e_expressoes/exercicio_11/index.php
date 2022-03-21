<?php

class Pessoa{
    function falar($frase){
        echo $frase;
        echo "<br>";
    }
}

$erick = new Pessoa();
$erick -> falar("Olá mundo");

$a = "5" * 12;
$tipo = gettype($a);

echo "Resultado: $a, Tipo: $tipo";
echo "<br>";

echo gettype(5.67);
echo "<br>";
echo gettype("Erick");
echo "<br>";
echo gettype([ ]);
echo "<br>";
echo gettype(true);
echo "<br>";
echo gettype($erick);
echo "<br>";


