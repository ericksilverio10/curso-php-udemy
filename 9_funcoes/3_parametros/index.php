<?php

    function velocidadeMaxima($vel){
        if(is_int($vel) || is_float($vel)){
            echo "O carro atinge a velocidade máxima de <strong>$vel km/h</strong><br>";
        } else{
            echo "Insira um valor válido <br>";
        }
    }

    velocidadeMaxima(89.10);
    velocidadeMaxima(67.90);
    velocidadeMaxima(128);
    velocidadeMaxima("olá mundo");