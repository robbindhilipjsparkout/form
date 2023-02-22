<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="registerform-js.js"></script>

    
</head>



<body    style="background-image: linear-gradient(to right,whitesmoke,rgb(203, 253, 247 ),rgb(
    165, 254, 244 ));">
   



	<div class="container">
		<div class="col-lg-8
		m-auto d-block">


			
<form method="post"  action="registertask.php" id="form-submit" class="container-fluid   col-lg-5 col-lg-offset-6" style="border:1px black solid ; padding: 35px; margin-top: 40px; 
 border-radius: 5px; background-image: linear-gradient(to right,rgb(245, 228, 228),rgb(203, 253, 247 ),rgb(41, 68, 65)) ;">

	<div class="form-group">
					<label for="user">
						Name:
					</label>
					<input type="text" name="Name" id="usernames" class="form-control">
					<h5 id="usercheck" style="color: rgb(245, 8, 8);">
						--Name is Missing--
					</h5>
				</div>

				
				<div class="form-group">
					<label for="user">
						Email:
					</label>
					<input type="email" name="Email" id="email"  class="form-control">
					<h5 id="emailvalid" class="form-text"
				 style="color: rgb(241, 7, 7);">
						--Enter Email--
				</h5>
				</div>

				<div class="form-group">
					<label for="password">
						Password:
					</label>
					<input type="password" name="pass" id="password" class="form-control">
					<h5 id="passcheck" style="color: rgb(241, 7, 7);">
						--Please Fill the password--
					</h5>
				</div>

				<div class="form-group">
					<label for="conpassword">
						Confirm Password:
					</label>
					<input type="password" name="cpass" id="conpassword" class="form-control">
					<h5 id="conpasscheck" style="color: rgb(243, 7, 7);">
						--Password didn't match--
					</h5>
				</div>
                
  <div class="form-group">
    <label for="age">Age:</label>
    <input type="number" name="age"  class="form-control" id="agename">
	<h5 id="age" style="color: rgb(247, 14, 14);">--Enter your age --</h5>
  </div>

  
  <input type="submit" id="submitbtn" name="submitbtn" value="Register" class="btn btn-primary">

 <h6> Already have an account?<a href="loginform.php">LOG-IN</a></h6>

  </form>

    </div>
	</div>

    <?php

if(isset($_POST['submitbtn'])){
    	
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $Password=$_POST['pass'];
    $cpassword=$_POST['cpass'];
    $Age=$_POST['age'];
    
    
    $formcon = new mysqli("localhost","root","","registerform");
    
    $sql = "INSERT INTO  rform(Name,Email,Password,cpassword,Age) values('{$Name}','{$Email}','{$Password}','{$cpassword}','{$Age}')";
    
    $form=mysqli_query($formcon,$sql);
    
    if($form){
    
        echo " connected successfully";  
        die();
        }
        else{
     
            echo "not connected";
          
        }
    }
 ?>
		
</body>
</html>


<script>
        if(window.history.replaceState){

            window.history.replaceState(null,null,window.location.href);
        }

</script>