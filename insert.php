<?php

if(isset($_POST) && isset($_POST['name']) && $_POST['name'] !== '' && isset($_POST['contact']) && $_POST['contact'] !== ''){
    
    $name = $_POST['name'];
    $contact = $_POST['contact'];

    include_once './connect.php';

    $query = "INSERT INTO student VALUES ('$name', '$contact')";
    $result = mysqli_query($conn, $query);

    if($result){
        echo "data inserted sucessfully<br>";
        echo '<a href="http://localhost/rose/form.html"><button>Re enter</button></a>';

        include_once './data.php';
    }

}else{

?>
<p>Please enter form data</p>
<a href="http://localhost/rose/form.html"><button>Open Form</button></a>



<?php
}

?>