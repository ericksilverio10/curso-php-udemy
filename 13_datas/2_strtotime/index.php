<?php

    $cincodias = strtotime('5 Days');
    echo $cincodias . "<br>";

    $dezdias = strtotime('10 Days');
    echo $dezdias . "<br>";

    $dataAtualMaisCinco = date('d/m/y', $cincodias);
    echo $dataAtualMaisCinco . "<br>";

    $dataAtualMaisDez = date('d/m/y', $dezdias);
    echo $dataAtualMaisDez . "<br>";

    $doisMeses = strtotime('2 Months');
    $dataAtualMaisDoisMeses = date('d/m/y', $doisMeses);
    echo $dataAtualMaisDoisMeses . "<br>";

    $dozeAnos = strtotime('12 Years');
    echo date('d,M Y', $dozeAnos) . "<br>";