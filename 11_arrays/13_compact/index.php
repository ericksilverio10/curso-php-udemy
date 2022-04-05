<?php

    $nome = "Erick";
    $idade = "18";
    $peso = "75";
    $altura = "1.78";

    $pessoa = compact("nome", "idade", "peso", "altura");
    print_r($pessoa);