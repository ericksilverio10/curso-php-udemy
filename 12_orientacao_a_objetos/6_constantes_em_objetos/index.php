<?php

    class Humano {
        public const OLHOS = 2;
        public const BRACOS = 2;
        public const PERNAS = 2;

        function mostrarConstante(){
            echo "Olhos: " . self::OLHOS . "<br>";
            echo "Braços: " . self::BRACOS . "<br>";
            echo "Pernas: " . self::PERNAS . "<br>";
        }
    }

    $erick = new Humano;
    $erick -> mostrarConstante();