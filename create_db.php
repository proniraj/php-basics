<?php

include_once('./connect.php');

$sql = 'CREATE DATABASE babita';

$result = mysqli_query($conn, $sql);

if($result){
    echo "Database created";
}else{
    echo "Database not created";
}


?>