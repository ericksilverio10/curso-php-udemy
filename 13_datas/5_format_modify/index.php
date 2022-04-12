<?php

    $data = new Datetime();
    echo $data -> format('d/m/y') . "<br>";
    //data atual
    
    $data -> modify('+ 5 Days');
    echo $data -> format('d/m/y') . "<br>";
    //data atual + 5 dias

    $data -> modify('- 2 Years');
    echo $data -> format('d/m/y') . "<br>";
    //data atual - 2 anos