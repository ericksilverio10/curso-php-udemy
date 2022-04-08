<?php

    interface Gestos {
        const nome = "Erick";
        public function falar();
        public function sorrir();
    }

    class Humano implements Gestos {
        public $idade = 18;
        public function falar(){
            return "Olá mundo! <br>";
        }
        public function sorrir(){
            return true;
        }
        public function apresentar(){
            echo "Prazer, meu nome é " . self::nome;
        }
    }

    $erick = new Humano;
    echo $erick -> falar();
    $erick -> apresentar();