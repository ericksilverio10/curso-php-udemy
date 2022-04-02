<?php

    function soma($a, $b, $c){
        $argumentos = implode(", ", func_get_args());
        $numArgumentos = func_num_args();

        return "Os argumentos passados foram: <strong>$argumentos</strong> e o número de argumentos foi <strong>$numArgumentos</strong> <br>" . "Resultado da soma: " . $a + $b + $c;
    }

    echo soma(331,1312,90);