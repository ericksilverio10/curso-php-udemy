<?php

    $arr = [
        'cor' => 'vermelho',
        'forma' => 'retângular',
        'material' => 'ferro'
    ];

    // criar variáveis com o nome e os valores da chave
    extract($arr);

    echo "$cor <br>";
    echo "$forma <br>";
    echo "$material <br>";