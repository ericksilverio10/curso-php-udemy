<?php

    $erick = [
        'nome' => 'Erick',
        'idade' => 18,
        'altura' => 1.78 ." m",
        'peso' => 78 ." kg",
        'cor dos olhos' => 'Castanhos'
    ];

    $ana = [
        'nome' => 'Ana',
        'idade' => 17,
        'altura' => 1.65 ." m",
        'peso' => 72 ." kg",
        'cor dos olhos' => 'Castanhos'
    ];

    $melissa = [
        'nome' => 'Melissa',
        'idade' => 17,
        'altura' => 1.60 . " m",
        'peso' => 61 ." kg",
        'cor dos olhos' => 'Verdes'
    ];

    function imprimeCaracteristicas($array){
        foreach($array as $caracteristicas => $value){
            echo "$caracteristicas: $value <br>";
        }
        echo "<br>";
    }

    imprimeCaracteristicas($ana);
    imprimeCaracteristicas($erick);
    imprimeCaracteristicas($melissa);
    
