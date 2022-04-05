<?php

    //RESGATAR ELEMENTOS DE ARRAY
    //REMOVER ELEMENTOS

    $arr = [7, 8, 2, 3, 4, 1];
    $removidos = array_splice($arr, 2, 3);
    print_r($removidos);
    echo "<br>";

    $removidos2 = array_splice($arr, 0, 2);
    print_r($removidos2);
    echo "<br>";
