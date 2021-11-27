<?php $servername = "localhost";
    $database = DB_NAME;
    $username = DB_LOGIN;
    $password = DB_PASS;
    // Создаем соединение
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    ?>