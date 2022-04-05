<?php

    $comidas = ['batata', 'maçã', 'pera', 'feijão', 'arroz'];
    print_r($comidas);
    echo "<br>";
    // Array ( [0] => batata [1] => maçã [2] => pera [3] => feijão [4] => arroz )

    $removidos = array_splice($comidas, 2, 2);

    echo "Removendo itens... <br>";
    print_r($comidas);
    // Array ( [0] => batata [1] => maçã [2] => arroz )

?>
