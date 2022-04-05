<?php

    $pessoa = [
        'nome' => 'Erick',
        'idade' => 18,
        'altura' => 1.78,
        'profissao' => 'programador'
    ];

    function verificaChaves($chave, $array){
        if(array_key_exists($chave, $array)){
            return "A chave existe!";
        } else{
            return "A chave não existe!";
        }
    }

    echo verificaChaves('nome',$pessoa);