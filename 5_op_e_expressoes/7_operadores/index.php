<?php

$a = 12;
$b = 57;
$c = "12";
$d = 3;

// igual a ==
if($a == $c){
    return true;
} else{
    return false;
}
// true

// idêntico a ===
if($a === $c){
    return true;
} else{
    return false;
}
// false

// diferente de !=
if($a != $d){
    return true;
} else{
    return false;
}
//true

// não idêntico !==
if($a !== $c){
    return true;
} else{
    return false;
}
//true

// maior que >
if($b > $a){
    return true;
} else{
    return false;
}
//true

//maior ou igual a >=
if($b >= $a){
    return true;
} else{
    return false;
}
//true

// menor que <
if($b < $a){
    return true;
} else{
    return false;
}
//true

//menor ou igual a <=
if($a <= $b){
    return true;
} else{
    return false;
}
//true