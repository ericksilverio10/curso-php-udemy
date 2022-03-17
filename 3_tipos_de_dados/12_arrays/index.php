<?php
$a = [1,2,3];
print_r($a);
// Array ( [0] => 1 [1] => 2 [2] => 3 )
echo "<br>";
echo $a[0];
//1
echo "<br>";
$b = ["Erick", 18, true];
print_r($b);
// Array ( [0] => Erick [1] => 18 [2] => 1 )
echo "<br>";
echo $b[1];
//18
echo "<br><br>";
if(is_string($b[0])){
    echo "$b[0] é um string!";
    echo "<br>";
} if(is_integer($b[1])){
    echo "$b[1] é um número inteiro!";
    echo "<br>";
} if (is_bool($b[2])){
    echo "É um booleano!";
}
