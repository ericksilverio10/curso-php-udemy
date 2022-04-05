<?php

    $arr = [1, 2, 3, 4];
    $slice = array_slice($arr, 1, 3);
    print_r($slice);
    echo "<br>";

    $comida = ["Banana", "Pudim", "Maçã", "Chocolate", "Macarrão"];
    $sliceComida = array_slice($comida, 2, 3);
    print_r($sliceComida);
    echo "<br>";
