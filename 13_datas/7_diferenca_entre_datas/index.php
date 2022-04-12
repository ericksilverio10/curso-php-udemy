<?php

    $nascimentoErick = new Datetime();
    $nascimentoErick -> setDate(2003, 06, 19);

    $nascimentoRosangela = new Datetime();
    $nascimentoRosangela -> setDate(1965, 01, 26);

    $diferenca = $nascimentoRosangela->diff($nascimentoErick);
    print_r($diferenca);
    echo "<br>";
    // 38 Years, 4 Months, 23 Days

    echo $diferenca -> format('%a Days');