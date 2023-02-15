
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

  




<form action="phpformconnect.php" class="container" style="width: 30%; margin-top: 50px; padding:35px; background-image: linear-gradient(to right,rgb(245, 228, 228),rgb(203, 253, 247 ),rgb(
  165, 254, 244 )) ;   border-radius: 10%; " id="submit" method="post">
  
  <h1>Database Form</h1>

  <div class="form-group">
    <label>Rollno:</label>
    <input type="number" name="rno" class="form-control" id="rno" required>
  </div>


<div class="form-group">
    <label>Name:</label>
    <input type="text" name="name" class="form-control" id="name" required>
  </div>
  
  
  <div class="form-group">
    <label for="email" >Email address:</label>
    <input type="email" name="email" class="form-control "  id="email" required>
  </div>


  <div class="form-group">
					<label for="password">
						Password:
					</label>
					<input type="password" name="pass" id="password" class="form-control" maxlength="8">
					
				</div>

				
 
  <div class="form-group">
    <label>age:</label>
    <input type="number" name="age" class="form-control" id="name" required>
  </div>



  <button type="submit" class="btn btn-info" id="sub1">Submit</button>
  <div><br>
  <span class="btn btn-info"><a href="http://localhost/index.php">Show Details</a></span><br><br>
  <span class="btn btn-warning"><a href="http://localhost/upadate.php">update Details</a></span><br><br>
  <span class="btn btn-success" ><a href="http://localhost/deletepage.php">delete data</a></span><br><br>
  <span class="btn btn-danger" ><a href="http://localhost/auto-complete.php">auto-complete</a><span>
</div>
 
</form>
  


<?php 
 
 
 error_reporting(0);

$rno=$_POST['rno'];
$name=$_POST['name'];
$email=$_POST['email'];
$age=$_POST['age'];
$pass=$_POST['pass'];


$formcon = new mysqli("localhost","root","","phpform");

$sql = "INSERT INTO  loginform(name,email,age,password,rno) values('$name','$email','$age','$pass','$rno')";

$form=mysqli_query($formcon,$sql);

if($form){

    echo " connected successfully";  
    die();
    }
    else{
 
        echo "not connected";
      
    }
?>

  </body>
  </html>




