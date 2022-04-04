<?php

    $arr = range(10,45);

    // foreach($arr as $numero){
    //     $numero += 6;
    //     echo $numero . "<br>";
    //     if($numero > 30){
    //         echo "$numero é muito alto! <br>";
    //     }
    // }

    for($i = 0; $i < count($arr); $i++){
        $soma = $arr[$i] + 6;
        if($soma > 30){
            echo "$soma é muito alto! <br>";
        } else {
            echo "$soma <br>";
        }
    }