<?php

    class Carro{
        public $nome = "BMW";
        public $velocidadeMin = 0;
        public $velocidadeMax = 200;
        function setVelocidadeMax($value){
            $this -> velocidadeMax = $value;
        }
        function getVelocidadeMin(){
            echo "A velocidade mínima desse carro é: " . $this -> velocidadeMin . " km/h<br>";
        }
        function getVelocidadeMax(){
            echo "A velocidade máxima desse carro é: " . $this -> velocidadeMax . " km/h <br>";
        }
    }

    $bmw = new Carro;
    echo $bmw -> nome . "<br>";
    $bmw -> getVelocidadeMin();
    $bmw -> getVelocidadeMax();

    $bmw -> setVelocidadeMax(350);
    $bmw -> getVelocidadeMax();
