

<?php

session_start();
if (!isset($_SESSION['uname'])){
    header("location:loginpagephp.php");
}

?>

<!DOCTYPE html>


<html lang="en">
<head>
  <title>mainPage php</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


<style>
    
*{ 
    padding: 0%;
    margin: 0%;
}
body{
    background: url(cloud.jpeg) no-repeat center;
    background-size: cover;
    height: 100vh;

}

  </style>

<body >


  

<!-- nav bar-->



<nav class="navbar " style="background-image: linear-gradient(to right,rgb(245, 228, 228),rgb(203, 253, 247 ),rgb(41, 68, 65)) ; ">
      
  <div class="container-fluid">
	

	
    
    <div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="border: 1px white solid;">
			<span class="icon-bar" style="background-color: rgb(243, 243, 243);"></span>
			<span class="icon-bar" style="background-color: rgb(250, 249, 249);"></span>
			<span class="icon-bar" style="background-color: rgb(248, 247, 247);"></span>                        
		  </button>	
      <a class="navbar-brand  " href="#">Dashboard</a>
    </div>


	

   
	<div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav ">
     
      <li ><a href="logout.php" >logout</a>
      <li ><a href="#" >logout from all devices</a>
</div>
        </form>
 
  </div>
</nav>


</body>
    </html>
