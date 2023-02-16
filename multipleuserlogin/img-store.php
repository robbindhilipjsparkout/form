

<?php

$con = mysqli_connect("localhost", "root", "", "phpimg");


session_start();

$name = $_SESSION['name'] ;



$sql = "SELECT * FROM users,image WHERE users.id = image.fkey AND users.name='$name'";

$res = $con->query($sql);

$image = "";



if ($res->num_rows > 0) {



    while ($row = $res->fetch_assoc()) {

        $image .= "

          
        <img class='col-md-2' width='200px' height='200px' src='data:image;base64,{$row["img"]}' style='margin-top:3%'> ";
        
    }

    echo $image;

} else {

    echo "<p class='text-center text-light'><br>No record found</p>";

}

?>