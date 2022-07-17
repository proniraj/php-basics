<?php

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'test';

    $conn = mysqli_connect($server, $username, $password, $db);
    
    if(!$conn){
        die("Error connecting to database");
    }

?>