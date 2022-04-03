<?php

    function contaLetrasA($str){
        $letrasA = [];
        for($i = 0; $i < strlen($str); $i++){
            if(strtoupper($str[$i]) == 'A'){
                array_push($letrasA, $str[$i]);
            }
        }
        return "A quantidades de letras 'a' na string <strong>$str</strong> é: " . count($letrasA);
    }

    $frase = "O rato roeu a roupa do rei de roma";
    echo contaLetrasA($frase);