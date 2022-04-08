<?php
    class Humano {
        public $idade = 18;
        public function falar(){
            echo "Olá mundo! <br>";
        }
        private function gritar(){
            echo "PHP É MUITO BOM! <br>";
        }
        public function getGritar(){
            return $this -> gritar();
        }
    }
    class Programador extends Humano{
        private $linguagemPreferida = "Javascript";
        public function alterarLinguagem($linguagem){
            $this -> linguagemPreferida = $linguagem;
        }
        public function getLinguagem(){
            return $this -> linguagemPreferida;
        }
    }

    $matheus = new Humano;
    $matheus -> falar();

    $erick = new Programador;
    $erick -> falar();
    $erick -> getGritar();
    echo $erick -> getLinguagem() . "<br>";

    $erick -> alterarLinguagem("Python");
    echo $erick -> getLinguagem() . "<br>";