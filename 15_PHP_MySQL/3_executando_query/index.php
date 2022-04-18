<?php
    $host = "localhost";
        $user = "root";
        $password = "";
        $db = "cursophp";
        
        $conn = new mysqli($host, $user, $password, $db);

        $sql = "SELECT * FROM itens";
        $result = $conn -> query($sql);
        print_r($result);

        $conn->close();