

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Phppage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
   

</head>
    

    <body   class="responsive" style="background-image: linear-gradient(to right,whitesmoke,rgb(203, 253, 247 ),rgb(
    165, 254, 244 ));">

<div class="container">
    <h2 align="center">Show Image</h2>
    <span class="btn btn-info" ><a href="http://localhost/phpimg/phpimg-2.php">php-img-upload</a><span>
</div>


<div class='row'>
<?php

$con=mysqli_connect("localhost","root","","phpimg") or die('Unable to connect');


    $sql="SELECT * FROM image";

    $result=$con->query($sql);

    if($result->num_rows>0){

        while($row=$result->fetch_assoc()){

            echo "

            <img class='col-md-2' width='150px' height='150px' src='data:image;base64,{$row["img"]}' style='margin-top:3%'>

            ";

            
          
        }
    }

?>
</div>
     
</body>
</html>