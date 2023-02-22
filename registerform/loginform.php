
<?php

session_start();
if (isset($_SESSION['Email'])){
    header("location:dashboard.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  

    
</head>



<body    style="background-image: linear-gradient(to right,whitesmoke,rgb(203, 253, 247 ),rgb(
    165, 254, 244 ));">


			
<form method="post"  action="loginform-code.php" id="form-submit"  class="container-fluid   col-lg-5 col-lg-offset-6" style="border:1px black solid ; padding: 35px; margin-top: 40px; 
 border-radius: 5px; background-image: linear-gradient(to right,rgb(245, 228, 228),rgb(203, 253, 247 ),rgb(41, 68, 65)) ;">
				
				<div class="form-group">
					<label for="user">
						Email:
					</label>
					<input type="email" name="Email" id="email"  class="form-control">
					<!-- <h5 id="emailvalid" class="form-text"
				 style="color: rgb(241, 7, 7);">
						--Enter Email--
				</h5> -->
				</div>

                <div class="form-group">
					<label for="password">
						Password:
					</label>
					<input type="password" name="Password" id="password" class="form-control">
					<!-- <h5 id="passcheck" style="color: rgb(241, 7, 7);">
						--Please Fill the password--
					</h5> -->
				</div>


                <input type="submit" id="submitbtn" name="submitbtn" value="Log-In" class="btn btn-primary">
                
 <h6> Don't have an account?<a href="registertask.php">SIGN-IN</a></h6>

</form>




</body>
</html>