<?php

    function pessoa($nome,$idade,$sexo){
        if(is_string($nome) && is_int($idade) && is_string($sexo)){
            if(strtoupper($sexo) == "M"){
                if($idade > 1){
                    echo "Olá, eu sou o $nome e eu tenho $idade anos! <br>";
                } else if($idade == 1){
                    echo "Olá, eu sou o $nome e eu tenho $idade ano! <br>";
                }
            } else if(strtoupper($sexo) == "F"){
                if($idade > 1){
                    echo "Olá, eu sou a $nome e eu tenho $idade anos! <br>";
                } else if($idade == 1){
                    echo "Olá, eu sou a $nome e eu tenho $idade ano! <br>";
                }
            }
        } else{
            echo "Dados inválidos <br>";
        }
    }

    pessoa("Ana",18,"F");
    pessoa("Erick",19,"m");
    pessoa("Rosangela","56","f");
    pessoa("Evandro",56,"m");