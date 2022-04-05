<?php

    $ranking = [
        'Erick' => 87,
        'Juliana' => 61,
        'Cesar' => 92,
        'Marcos' => 102,
        'Vinicius' => 17
    ];
    

?>

<h1>Ranking melhores jogadores:</h1>
<?php arsort($ranking); foreach($ranking as $nome => $pontuacao): ?>
    <ul>
        <li><?= "$nome: $pontuacao pts" ?></li>
    </ul>
<?php endforeach; ?>