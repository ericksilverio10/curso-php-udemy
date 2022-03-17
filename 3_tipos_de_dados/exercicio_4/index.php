<?php

$a = 1.891;
$b = -7.1839173;
$c = 3.781937;
$d = 6;

echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo $c;
echo "<br>";
echo $d;
echo "<br><br>";

if(is_float($a)){
    echo $a, " É Float!<br>";
}
if(is_float($b)){
    echo $b, " É Float!<br>";
}
if(is_float($c)){
    echo $c, " É Float!<br>";
}
if(is_float($d)){
    echo $d, " É Float!<br>";
} else{
    echo $d, " NÃO É Float!<br>";
}