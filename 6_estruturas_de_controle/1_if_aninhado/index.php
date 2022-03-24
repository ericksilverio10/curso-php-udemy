<?php

if(10 > 2){
    echo "Entrou no primeiro IF <br>";

    if("teste" == "teste"){
        echo "Entrou no segundo IF!<br>";
    }
}
echo "<br>";
if(10 > 2){
    echo "Entrou no primeiro IF <br>";
    
    if("teste" != "teste"){
        echo "Entrou no segundo IF!<br>";
    } else{
        echo "Entrou no primeiro ELSE! <br>";
    }
}
echo "<br>";
if(is_string("Olá mundo!")){
    echo "Entrou no primeiro IF <br>";
    
    if(10 % 2 == 0){
        echo "Entrou no segundo IF!<br>";
        if(gettype(6) == "integer"){
            echo "Entrou no terceiro IF!";
        }
    } else{
        echo "Não entrou no segundo IF! <br>";
    }
}