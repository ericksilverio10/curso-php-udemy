<?php

    class Humano {

    }
    class Animal {

    }

    class Professor extends Humano{

    }

    $erick = new Humano;
    $cachorro = new Animal;
    if($erick instanceof Humano){
        echo "Erick é um humano! <br>";
    } else {
        echo "Erick NÃO é um humano! <br>";
    }

    if($cachorro instanceof Animal){
        echo "Cachorro é um animal! <br>";
    } else {
        echo "Cachorro NÃO é um animal! <br>";
    }

    $thomaz = new Professor;
    if($thomaz instanceof Humano){
        echo "Thomaz é um humano! <br>";
    } else{
        echo "Thomaz NÃO é um humano! <br>";
    }
    if($thomaz instanceof Professor){
        echo "Thomaz é um professor! <br>";
    } else{
        echo "Thomaz NÃO é um professor! <br>";
    }
    if($erick instanceof Professor){
        echo "Erick é um professor! <br>";
    } else{
        echo "Erick NÃO é um professor! <br>";
    }