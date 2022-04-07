<?php

    class Pessoa {
        public $altura = 1.75;
        public $peso = 70;
        public $corDosOlhos = "verdes";
        function andar($m){
            return "A pessoa andou $m metros <br>";
        }
    }

    $erick = new Pessoa;
    echo $erick -> altura . "<br>";
    echo $erick -> peso . "<br>";

    $erick -> corDosOlhos = "castanhos";

    echo $erick -> corDosOlhos . "<br>";
    echo $erick -> andar(8);