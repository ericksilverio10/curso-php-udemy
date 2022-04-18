<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $password, $db);

    $q = "SELECT * FROM itens";

    $result = $conn -> query($q);

    //UM RESULTADO
    print_r($result -> fetch_assoc());

    //TODOS OS RESULTADOS
    print_r($result -> fetch_all());
