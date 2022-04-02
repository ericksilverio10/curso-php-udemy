<?php

    function verificaNumero($num){
        if(is_int($num)){
            if($num % 2 == 0){
                echo "$num é: <strong>PAR!</strong> <br>";
            } else if($num % 2 != 0){
                echo "$num é: <strong>IMPAR!</strong> <br>";
            }
        } else if(strtoupper($num) == "ALEATORIO"){
            $numeroAleatorio = random_int(-100,100);
            if($numeroAleatorio % 2 == 0){
                echo "$numeroAleatorio é: <strong>PAR!</strong><br>";
            } else if($numeroAleatorio % 2 != 0){
                echo "$numeroAleatorio é: <strong>ÍMPAR!</strong><br>";
            }
        } else{
            echo "$num é inválido! Digite em forma de número <br>";
        }
    }
    verificaNumero(7);
    verificaNumero(12897219);
    verificaNumero(3812812);
    verificaNumero(172);
    verificaNumero(1921.0);
    verificaNumero("aleatorio");
    verificaNumero("aleatorio");
    verificaNumero("aleatorio");
    verificaNumero("aleatorio");
    verificaNumero("aleatorio");
    verificaNumero("aleatorio");