<html>
<head>
    <link rel="stylesheet"  href="./style.css">
</head>
    <body>
<table>
    <thead>
        <tr><th>Name</th><th>Contact</th><th>Action</th></tr>
    </thead>
    <tbody>
<?php

    include_once './connection.php';

    $query = 'SELECT * from student';
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo'<tr>';
            echo  '<td>' . $row['name'] .'</td>' . '<td>' . $row['contact'] . '</td>' . '<td>
                    <a href=./delete.php?contact='.$row['contact'].' >Delete</a>
                    </td>';
            echo'</tr>';
        }
    }
    
?>

    </tbody>
</table>

</body>
</html>