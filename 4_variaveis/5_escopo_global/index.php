<?php

$teste = "abcdef";
echo "$teste Global 1 <br>";
// abcdef Global 1;

if(true){
    $teste = "fedcba";
    echo "$teste If <br>";
    // fedcba If;
}

echo "$teste Global 2 <br>";
// fedcba Global 2;

function funcao(){
    global $teste;
    $teste = 3;
    echo "$teste Local <br>";
}

funcao();
// fedcba Local;

echo "$teste Global 3 <br>";
// 3;
