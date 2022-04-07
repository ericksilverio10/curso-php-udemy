<?php

    class Pessoa {
        public $nome = "Erick";
        public $idade = 18;
        function andar($m){
            return "A pessoa andou $m metros! <br>";
        }
    }

    $erick = new Pessoa;
    echo $erick -> nome . "<br>";
    echo $erick -> idade . " anos <br>";
    echo $erick -> andar(1000);
