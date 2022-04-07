<?php

    class Animal{
        public $nome;
        function escolherNome($nome){
            $this -> nome = $nome;
        }
        function latir(){
            return "Au Au";
        }
        function latirForte(){
            return strtoupper($this->latir());
        }
        function miar(){
            return "Miau Miau";
        }
        function miarForte(){
            return strtoupper($this->miar());
        }
    }

    $cachorro = new Animal;
    $cachorro -> escolherNome("Lion");
    echo $cachorro -> nome . "<br>";

    $gato = new Animal;
    $gato -> escolherNome("Paola");
    echo $gato -> nome . "<br>";

    $calopsita = new Animal;
    $calopsita -> escolherNome("Babu");
    echo $calopsita -> nome . "<br>";

    echo $cachorro -> latir() . "<br>";
    echo $cachorro -> latirForte() . "<br>";

    echo $gato -> miar() . "<br>";
    echo $gato -> miarForte() . "<br>";