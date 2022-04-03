<?php

    function verificaPreco($array){
        $itensCaros = [];
        foreach($array as $item => $preco){
            if($preco > 10){
                array_push($itensCaros, $item);
            }
        }
        return implode (", ", $itensCaros);
    }

    $objetos = [
        'Chiclete' => 6,
        'Kinder-Ovo' => 12,
        'Guaraná' => 8,
        'Pepsi 3L' => 14,
        'Salmão' => 40
    ];

    $x = verificaPreco($objetos);

    echo "Os itens mais caros que R$10 são: $x";