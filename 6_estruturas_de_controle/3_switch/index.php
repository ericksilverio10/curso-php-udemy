<?php

$x = 1;
switch($x){
    case 0: 
        echo "X é igual a 0 <br>";
        break;
    case 1: 
        echo "X é igual a 1 <br>";
        break;
    default:
        echo "X não é igual a nenhum dos valores mencionados <br><br>";
        break;
}

$y = "Ana";
switch($y){
    case "Erick": 
        echo "Seu nome é Erick! <br>";
        break;
    case "Ana": 
        echo "Seu nome é Ana! <br>";
        break;
    default:
        echo "Seu nome não é igual a nenhum dos valores mencionados";
        break;
}