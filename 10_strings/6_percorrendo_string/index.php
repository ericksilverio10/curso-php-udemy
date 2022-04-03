<?php

    $str = "Essa string é muito grande, ela tem muitos caracteres";

    for($x = 0; $x < strlen($str); $x++){
        echo $str[$x] . "<br>";
    }