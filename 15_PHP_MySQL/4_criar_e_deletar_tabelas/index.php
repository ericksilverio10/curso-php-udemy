<?php
    $host = "localhost";
        $user = "root";
        $password = "";
        $db = "cursophp";
        
        $conn = new mysqli($host, $user, $password, $db);

        //criando tabela
        //$q = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

        //deletando tabela
        $q = "DROP TABLE teste";

        $conn -> query($q);
        $conn -> close();