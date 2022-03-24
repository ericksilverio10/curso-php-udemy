<?php

$x = 0;

while ($x < 10){
    echo "o X é $x<br>";

    if($x === 7){
        echo "Terminando o Loop <br>";
        break;
    }
    $x++;
}
echo "Saiu do loop";