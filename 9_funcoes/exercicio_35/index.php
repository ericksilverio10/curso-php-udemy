<?php

    function quadrado($num){
        if(is_int($num) || is_float($num)){
            return $num ** 2;
        } else{
            return "Dados inválidos";
        }
    }
    $x = quadrado(190);
    echo $x . "<br>";
    $y = quadrado($x);
    echo $y . "<br>";
    $z = quadrado($y);
    echo $z . "<br>";
