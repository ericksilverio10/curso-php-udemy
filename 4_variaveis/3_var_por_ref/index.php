<?php
$x = 10;
$y = & $x;
echo $x;
echo "<br>";
echo $y;
echo "<br>";
// 10;
// 10;

$y = 15;
echo "<br>";
echo "Atribuição após ref:";
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";
// 15;
// 15;

$x = 20;
echo "<br>";
echo "Atribuição após ref 2:";
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";
// 20;
// 20;

$nome = "Erick";
$nome2 = & $nome;
echo "<br>";
echo "Atribuição após ref 3:";
echo "<br>";
echo $nome;
echo "<br>";
echo $nome2;
echo "<br>";
// Erick;
// Erick;

$nome2 = "João";
echo "<br>";
echo "Atribuição após ref 4:";
echo "<br>";
echo $nome;
echo "<br>";
echo $nome2;
echo "<br>";

?>
