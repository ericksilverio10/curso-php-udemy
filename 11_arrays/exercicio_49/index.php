<?php

    $nome = "Mel";
    $raca = "Shitzu";
    $cor = "Branca";
    $idade = "3 anos";
    $sexo = "Fêmea";

    $cachorro = compact("nome", "raca", "cor", "idade", "sexo");

    print_r($cachorro);
    echo "<br>";

    // for($i = 0; $i < count($cachorro); $i++){
    //     echo $cachorro[$i] . "<br>";
    // }

    foreach($cachorro as $caracteristica => $value){
        echo "$caracteristica: $value <br>";
    }