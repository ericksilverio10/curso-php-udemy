<?php

$x = 10;
echo "$x Global";
echo "<br>";

function teste(){
    $x = 5;
    echo "$x Local";
}

teste();

// 10 Global;
// 5 Local;