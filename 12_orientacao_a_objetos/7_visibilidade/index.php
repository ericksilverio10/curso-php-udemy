<?php

    class Car{
        public $rodas = 4;
        public $pelicula = false;
        // uma propriedade privada só pode ser acessada dentro da classe
        private $bancos = "Couro";
        public function getBancos(){
            return $this -> bancos;
        }
        // o mesmo acontece com o protected
        protected $portas = 4;
        public function getPortas(){
            return $this -> portas;
        }
    }
    class Mecanico {
        public function alterarRodas($obj){
            $obj->rodas = 10;
        }
        public function colocarPelicula($_carro){
            $_carro->vidro = true;
        }
        public function removerPelicula($_carro){
            $_carro -> vidro = false;
        }
        public function verificarPelicula($_carro){
            if($_carro -> vidro == true){
                return "O carro tem película! <br>";
            } else{
                return "O carro NÃO tem película, coloque uma! <br>";
            }
        }
    }

    $carro = new Car;
    echo $carro -> rodas . "<br>";

    $erick = new Mecanico;
    $erick -> alterarRodas($carro);
    echo $carro -> rodas . "<br>";

    $erick -> colocarPelicula($carro);
    echo $carro -> vidro . "<br>";

    $erick -> removerPelicula($carro);
    echo $carro -> vidro . "<br>";

    echo $erick -> verificarPelicula($carro);
    $erick -> colocarPelicula($carro);
    echo $erick -> verificarPelicula($carro);

    echo $carro -> getBancos() . "<br>";

    echo $carro -> getPortas() . "<br>";