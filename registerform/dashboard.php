<?php

session_start();
if (!isset($_SESSION['name'])){
    header("location:loginform.php");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="registerform-js.js"></script>

    
</head>



<body    style="background-image: linear-gradient(to right,whitesmoke,rgb(203, 253, 247 ),rgb(
    165, 254, 244 ));">
   
   <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav ">
          <li ><a href="userlogout.php" >logout</a>
         
        </div>
</body>
</html>