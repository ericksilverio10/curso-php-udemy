<?php

$a = 9;
$b = 10.98;
$c = "Hello World!";
$d = 10;

if(is_integer($a)){
    echo "Entrou no primeiro IF!<br>";
    if(is_float($b)){
        echo "Entrou no segundo IF!<br>";
        if(is_string($c)){
            echo "Entrou no terceiro IF!<br>";
            if(is_string($d)){
                echo "Entrou no quarto IF!<br>";
            } else{
                echo "Entrou no quarto ELSE!<br>";
            }
        } else{
            echo "Entrou no terceiro ELSE!<br>";
        }
    } else{
        echo "Entrou no segundo ELSE!<br>";
    }
} else{
    echo "Entrou no primeiro ELSE!<br>";
}