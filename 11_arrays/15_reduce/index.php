<?php

    $arr = [1, 5, 7, 1, 4, 3, 3];

    function soma($a, $b){
        return $a + $b;
    }
                          //array  //funcao
    $resultado = array_reduce($arr, "soma");
    echo $resultado;
    // 24