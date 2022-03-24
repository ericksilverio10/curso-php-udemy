<?php

$arr = [];
for($i = 10; $i <= 50; $i++){
    array_push($arr, $i);
}
echo "Os números ímpares são: <br>";
for($j = 0; $j < count($arr); $j++){
    if($arr[$j] % 2 != 0){
        echo "Número ímpar: $arr[$j] <br>";
    }
}
echo "FIM!";