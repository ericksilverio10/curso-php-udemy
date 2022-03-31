<?php

    //definição
    function multiplicar(){
        $a = random_int(1,80);
        $b = random_int(1,80);
        $c = random_int(1,80);
        $resultado = $a * $b * $c;
        echo "O resultado de $a x $b x $c é: $resultado";
    }

    //invocação
    multiplicar();