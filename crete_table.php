<?php

include_once './connect.php';

$sql = 'CREATE TABLE student(name varchar(20), phone int(10))';

$result = mysqli_query($conn, $sql);

if($result){
    echo "Table created";
}else{
    echo "Table not created";
}

?>