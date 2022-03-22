<?php

$a = (int) "12";

echo $a + 6;
echo "<br>";

if(is_integer($a)){
    echo "É um número inteiro! <br>";
}

if($a === 12){
    echo "$a é idêntico a 12! <br>";  
}

$b = (float) "12.0";
if ($b === $a){
    echo "$b é idêntico a $a!";
} else{
    echo "$b NÃO é idêntico a $a!";
}