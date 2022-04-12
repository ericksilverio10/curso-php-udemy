<?php

    $dataNascimento = mktime(16,34,00,06,19,2003);
    echo $dataNascimento . "<br>";

    $dataNascimentoFormatada = date('d/m/y', $dataNascimento);
    echo $dataNascimentoFormatada . "<br>";