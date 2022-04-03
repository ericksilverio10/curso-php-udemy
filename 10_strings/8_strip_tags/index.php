<?php

    $textoHTML = "<p>Um parágrafo</p><div>Uma div</div><p>Outro parágrafo</p>";
    echo $textoHTML;

    $convertendoTextoHTML = strip_tags($textoHTML);
    echo $convertendoTextoHTML;