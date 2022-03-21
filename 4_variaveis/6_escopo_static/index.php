<?php

function teste(){
    $a = 0;
    $a++;
    echo $a;
}
teste();
// 1
teste();
// 1
teste();
// 1
function testeStatic(){
    static $a = 0;
    $a++;
    echo $a;
}
testeStatic();
// 1
testeStatic();
// 2
testeStatic();
// 3