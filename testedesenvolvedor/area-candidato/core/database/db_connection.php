<?php

    require('db_settings.php');

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    mysqli_set_charset($conn, 'utf8');

    // Check connection
    if($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    } else {
        echo 'Conectado com sucesso<br>';
    }
