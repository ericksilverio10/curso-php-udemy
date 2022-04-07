<?php

    class Cachorro{
        function latir(){
            echo "Au Au <br>";
        }
        function andar($passos){
            echo "O cachorro deu $passos passos <br>";
        }
    }

    $lion = new Cachorro;
    $mel = new Cachorro;
    
    $mel -> latir();
    $lion -> latir();

    $lion -> andar(52);
    $mel -> andar(20);