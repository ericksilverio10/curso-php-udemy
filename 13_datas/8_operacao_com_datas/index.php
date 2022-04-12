<?php

    $dataA = new Datetime();
    $dataA -> setDate(2003,06,19);
    $dataA -> setTime(00,00,00);
    
    $dataB = new Datetime();
    $dataB -> setDate(2004,12,12);
    $dataB -> setTime(00,00,00);

    print_r($dataA);
    echo "<br>";
    print_r($dataB);
    echo "<br>";

    $dataA == $dataB;
    // false

    $dataA != $dataB;
    // true

    echo "<br>";

    function comparaDatas($data1, $data2){
        if($data1 != $data2){
            if($data1 > $data2){
                echo "A primeira data é mais recente!<br>";
            } else {
                echo "A segunda data é mais recente!<br>";
            }
        } else{
            echo "As datas são IGUAIS!<br>";
        }
    }

    comparaDatas($dataA, $dataB);