<?php

    $arr = [
        [4, 5 ,2, 9],
        [2, 9, 0, 1],
        [3, 1, 5, 7],
    ];

    //loop no array externo
    for($i = 0; $i < count($arr); $i++){
        echo "Array externo: " . ($i + 1) . "<br>";

        //loop no array interno
        for($j = 0; $j < count($arr[$i]); $j++){
            echo $arr[$i][$j] . "<br>";
        }
    }
