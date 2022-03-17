<?php

$carro1 = ['modelo'=>'Fox', 'marca'=>'VW', 'cor'=>'Prata'];

echo $carro1['modelo'];
echo "<br>";
echo $carro1['marca'];
echo "<br>";
echo $carro1['cor'];
echo "<br>";
echo "<br>";

$carro2 = ['modelo'=>'HB20', 'marca'=>'Hyundai', 'cor'=>'Vermelho'];

echo $carro2['modelo'];
echo "<br>";
echo $carro2['marca'];
echo "<br>";
echo $carro2['cor'];
echo "<br>";
echo "<br>";

$modelo = $carro2['modelo'];
$marca = $carro2['marca'];
$cor = $carro2['cor'];

echo "O carro é da marca $marca, o modelo é $modelo e a cor é $cor";
