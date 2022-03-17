<?php

echo "Testando aspas duplas <br>"; 
echo 'Testanto aspas simples <br>';

echo "Ele disse: 'Olá'<br>";
echo 'Ela disse: "Eu te amo"<br><br>';

$idade = 18;

//Aspas duplas interpretam variáveis
echo "Ele tem $idade anos.";
echo "<br>";

//Aspas simples NÃO interpretam variáveis
echo 'Ela tem $idade anos.';
echo '<br>';

?>