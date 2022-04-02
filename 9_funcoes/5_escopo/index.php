<?php

    $a = 5;
    $b = 15;

    function testeEscopo(){
        $a = 10;
        global $b;
        $a++;
        $b++;
        static $c = 0;
        $c++;
        echo "ESCOPO LOCAL DE A: $a <br>";
        echo "ESCOPO GLOBAL NA FUNÇÃO B: $b <br>";
        echo "ESCOPO STATIC DE C: $c <br>";

    }

    echo "ESCOPO GLOBAL DE A: $a <br>";
    echo "ESCOPO GLOBAL DE B: $b <br>";

    testeEscopo();

    echo "ESCOPO GLOBAL DE B 2: $b <br>";

    testeEscopo();