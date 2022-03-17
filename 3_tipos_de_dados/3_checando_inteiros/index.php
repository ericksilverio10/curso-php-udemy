<?php
$numero = 5;
if(is_int($numero)){ //true
    echo $numero, " É um número inteiro!<br>";
} else{
    echo $numero, " Não é um número inteiro!<br>";
}
$numero = -10;
if(is_int($numero)){ //true
    echo $numero, " É um número inteiro!<br>";
} else{
    echo $numero, " Não é um número inteiro!<br>";
}
$numero = 6.78;
if(is_int($numero)){ //false
    echo $numero, " É um número inteiro!<br>";
} else{
    echo $numero, " Não é um número inteiro!<br>";
}
$numero = "5";
if(is_int($numero)){ //false (é uma string)
    echo $numero, " É um número inteiro!<br>";
} else{
    echo $numero, " Não é um número inteiro!<br>";
}
