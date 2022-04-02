<?php

    $itens = ["Banana","Chocolate","Pastel","Refrigerante"];

    function converteArrayString($array){
        $separaArray = implode(", ", $array);
        return "Sua lista de compras: $separaArray.";
    }

    $novoItens = converteArrayString($itens);
    echo $novoItens;