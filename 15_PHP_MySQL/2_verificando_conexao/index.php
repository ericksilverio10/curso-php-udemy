<?php
    
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "cursophp";
    
    $conn = new mysqli($host, $user, $password, $db);

    if($conn -> connect_errno){
        echo "Erro na conexão! <br>";
        echo "Erro: " . my_sqli_connect_error();
    } else{
        echo "Conexão realizada com sucesso! <br>";
    }