<?php

    class Pessoa {
        function falar(){
            echo "Olá, eu sou um objeto! <br>";
        }
        function somar($x, $y){
            echo $x + $y . "<br>";
        }
    }

    $erick = new Pessoa;
    $erick -> falar();

    $matheus = new Pessoa;
    $matheus -> somar(10, 5);