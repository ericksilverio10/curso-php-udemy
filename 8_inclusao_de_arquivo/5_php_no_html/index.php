<?php
    include_once "backend.php";
?>
<h1>Bem-vindo(a) ao nosso site, <?= $nome?></h1>
<p>Aqui estão os nossos produtos:</p>
<ul>
    <?php foreach($produtos as $produto): ?>
    <li><?= $produto?></li>
    <?php endforeach?>
</ul>