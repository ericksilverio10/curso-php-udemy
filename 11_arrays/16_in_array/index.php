<?php

    $comida = ["cachorro quente", "batata", "banana", "chocolate", "pera"];

    function procuraComida($value, $array){
        if(in_array($value, $array)){
            echo "Foi encontrado $value na lista!";
        } else{
            echo "NÃO foi encontrado $value na lista!";
        }
    }

    procuraComida("batata", $comida);