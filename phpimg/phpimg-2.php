<!DOCTYPE html>
<html lang="en">
<head>
  <title>img-php</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
   <style>
    .container{
            text-align: center;
            margin-top: 4%;
        }
        #upload{
            margin-top: 2%;
        }
    </style>

</head>





<body   class="responsive" style="background-image: linear-gradient(to right,whitesmoke,rgb(203, 253, 247 ),rgb(
    165, 254, 244 ));">

<div class="container">
<form action="phpimg-2.php" method="post" enctype="multipart/form-data" class="container" style="width: 30%; margin-top: 50px; padding:35px; background-image: linear-gradient(to right,rgb(245, 228, 228),rgb(203, 253, 247 ),rgb(
  165, 254, 244 )) ;   border-radius: 10%; " >

 
  
  <div class="form-group">
  <label><h3>Select Image:</h3></label>
  <input type="file" name="upload" id="fileToUpload" required></div>
  <div class="form-group">
  <input id="upload" type="submit" value="Store Image" name="submit" class="btn btn-info">
 
</form></div>
<a href="./phpimg-show.php">
<input id="upload" type="submit" value="Show img" name="submit" class="btn btn-info"></a></div>






<?php

$con=mysqli_connect("localhost","root","","phpimg") or die('Unable to connect');

if (isset($_POST['submit'])){

    $image=$_FILES['upload']['tmp_name'];
    $name=$_FILES['upload']['name'];

    $image=file_get_contents($image);
    $image=base64_encode($image);
    $sql="INSERT INTO image (img) VALUES('$image')";

    if($con->query($sql))
    {
        // echo "<script>alert('Image stored')</script>";
    }
    else{

        echo "Error Occured...!!";
    }
   
}

?>


</body>
</html>

<!-- <script>
    if(window.history.replacestate) {

        window.history.replacestate(null,null,window.location.href);
    }

</script> -->




<!-- <script>
    $(document).ready(function (){

        $('#div').hide();
 
   $('#upload').click(function(){

    $('#div').show();
   })

    }); </script>-->
