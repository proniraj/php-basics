<?php

    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'test';

    // create a connection
    $conn = mysqli_connect($server, $user, $pass, $db);

    // check connection
    if(!$conn){
        die('Sorry, unable to connect ' . mysqli_connect_error());
    }

?>