
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    
    
</head>


<body   class="responsive" style="background-image: linear-gradient(to right,whitesmoke,rgb(203, 253, 247 ),rgb(
    165, 254, 244 ));">


<div>
   <form action="upadate.php" class="container" style="width: 30%; margin-top: 50px; padding:35px; background-image: linear-gradient(to right,rgb(245, 228, 228),rgb(203, 253, 247 ),rgb(
  165, 254, 244 )) ;   border-radius: 10%; " id="submit" method="post">
  
                
  <h1>Update Form</h1>

<div class="form-group">
  <label>Rollno:</label>
  <input type="number" name="rno" class="form-control" id="rno" required>
</div>

<div class="form-group">
    <label>Update Name:</label>
    <input type="text" name="name" class="form-control" id="name" required>
  </div>
  

  <div class="form-group">
    <label>Update age:</label>
    <input type="number" name="age" class="form-control" id="name" required>
  </div>

                
  <div class="form-group">
					<label for="password">
						Update Password:
					</label>
					<input type="password" name="pass" id="password" class="form-control" maxlength="8">
					
				</div>

               
  <button name="submit" type="submit" class="btn btn-info" id="sub1">UPDATE</button>

                
                        
  <span><a href="./phpformconnect.php">phpformconnect</a></span>
            </form>


        
    </div>
</body>

</html>

<?php



$formcon = new mysqli("localhost","root","","phpform");

if (isset($_POST['submit'])) {
    $rollno = $_POST['rno'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $pass = $_POST['pass'];
    $sql = "UPDATE loginform SET name='$name', age='$age' ,password='$pass' where rno='$rollno'";

    if ($formcon->query($sql)) {
        echo ('data updated successfully!!!!');
    } else {
        echo "Insert failed!!!";
    }

}
?>