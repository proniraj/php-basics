<?php

// echo "<pre>";
// print_r($_GET);
// echo "</pre>";

if(isset($_GET['contact'])){
    
    include_once './connect.php';

    $query = 'DELETE FROM student WHERE contact'."=".$_GET["contact"];
    $result = mysqli_query($conn, $query);

    if($result){
        echo "data deleted<br>";
        echo '<a href="./data.php"><botton>View Data</button></a>';
    }else{
        echo "error on deleting data";
        echo '<a href="./data.php"><botton>View Data</button></a>';
    }

}

?>