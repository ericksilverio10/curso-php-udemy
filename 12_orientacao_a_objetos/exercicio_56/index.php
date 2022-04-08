<?php
    class Humano{
        public $nome;
        public $idade;
        public function falar(){
            echo "Olá mundo! <br>";
        }
    }
    class Professor extends Humano {
        private $materia = "Matemática";
        public function alterarMateria($materia){
            $this -> materia = $materia;
        }
        public function getMateria(){
            return $this -> materia;
        }
        private $estaEmSala = true;
        public function sairDaSala(){
            if($this -> estaEmSala != false){
                $this -> estaEmSala = false;
            } else{
                echo "O professor já está fora da sala! <br>";
            }
        }
        public function entrarNaSala(){
            if($this -> estaEmSala != true){
                $this -> estaEmSala = true;
            } else{
                echo "O professor já está na sala! <br>";
            }
        }
        public function getPresenca(){
            return $this -> estaEmSala;
        }
        public function verificarPresenca(){
            if($this -> estaEmSala == true){
                return "O professor está em sala! <br>";
            } else{
                return "O professor não está em sala! <br>"; 
            }
        }
    }

    $fabio = new Professor;
    echo $fabio -> getMateria() . "<br>";
    echo $fabio -> verificarPresenca();
    $fabio -> sairDaSala();
    echo $fabio -> verificarPresenca();
    $fabio -> entrarNaSala();
    echo $fabio -> verificarPresenca();
    $fabio -> alterarMateria("Física");
    echo $fabio -> getMateria();

