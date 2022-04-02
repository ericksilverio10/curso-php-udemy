<?php

    $arr = [];
    for($i = 0; $i <= 400; $i++){
        array_push($arr,$i);
    }

    //print_r($arr);

    function arrayPar($array){
        $arrayRetorno = [];

        for ($j = 0; $j < count($array); $j++){
            if($array[$j] % 2 == 0){
                array_push($arrayRetorno, $array[$j]);
            }
        }
        return $arrayRetorno;
    }

    $novoArray = arrayPar($arr);

    echo implode(", ", $novoArray);