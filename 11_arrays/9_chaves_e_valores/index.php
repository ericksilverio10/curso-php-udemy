<?php

    $carro = [
        'marca' => 'Volkswagen',
        'motor' => '2.4',
        'câmbio' => 'automático',
        'modelo' => 'UP',
        'ano' => 2014
    ];

    $chaves = array_keys($carro);
    print_r($chaves);
    echo "<br>";

    $valores = array_values($carro);
    print_r($valores);
    echo "<br>";