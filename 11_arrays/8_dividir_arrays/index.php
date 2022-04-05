<?php

    $arr = range(1, 20);
    //vai retornar um array multidimensional
    $dividirArr = array_chunk($arr, 10);


    print_r($dividirArr);
    echo "<br>";
    print_r($dividirArr[0]);
    echo "<br>";
    print_r($dividirArr[1]);
