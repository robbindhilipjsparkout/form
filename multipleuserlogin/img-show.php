
<?php

session_start();
if (!isset($_SESSION['name'])){
    header("location:userlogin.php");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>img-php multi user</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

   <style>
    .container{
            text-align: center;
            margin-top: 4%;
        }
        #upload{
            margin-top: 2%;
        }
    </style>


    <script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("#div").hide();
  });
  $("#show").click(function(){
    $("#div").show();
  });
});
</script>

<script>
    if(window.history.replacestate) {

        window.history.replacestate(null,null,window.location.href);
    }

</script>



</head>



<body   class="responsive" style="background-image: linear-gradient(to right,whitesmoke,rgb(203, 253, 247 ),rgb(
    165, 254, 244 ));">


<!-- nav bar -->

<nav class="navbar " style="background-image: linear-gradient(to right,rgb(245, 228, 228),rgb(203, 253, 247 ),rgb(41, 68, 65)) ; ">
      
      <div class="container-fluid">
         
        
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="border: 1px white solid;">
                <span class="icon-bar" style="background-color: rgb(243, 243, 243);"></span>
                <span class="icon-bar" style="background-color: rgb(250, 249, 249);"></span>
                <span class="icon-bar" style="background-color: rgb(248, 247, 247);"></span>                        
              </button>	
          <span class="navbar-brand" >Dashboard</span>
        </div>
    
    
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav ">
          <li ><a href="userlogout.php" >logout</a>
          <!-- <li ><a href="#" >logout from all devices</a> -->
        </div>
          
      </div>
      </nav>



<!-- user login form--> 

<div class="container">
<form action="img-show.php" method="post" enctype="multipart/form-data" class="container" style="width: 30%; margin-top: 50px; padding:35px; background-image: linear-gradient(to right,rgb(245, 228, 228),rgb(203, 253, 247 ),rgb(
  165, 254, 244 )) ;   border-radius: 10%; " >

 
  
  <div class="form-group">
  <label><h3>Select Image:</h3></label>
  <input type="file" name="upload" id="fileToUpload" required>
</div>

  <div class="form-group">
  <input id="upload" type="submit" value="Store Image" name="submit" class="btn btn-info">
  </div>
 
</form>


<input id="show" type="submit" value="Show img" name="submit" class="btn btn-info">
<input id="hide" type="submit" value="hide img" name="submit" class="btn btn-info">


<!-- database img connect-->

<?php

$con=mysqli_connect("localhost","root","","phpimg") or die('Unable to connect');

if (isset($_POST['submit'])){

    $image=$_FILES['upload']['tmp_name'];
    $name=$_FILES['upload']['name'];

    $image=file_get_contents($image);
    $image=base64_encode($image);

    $name = $_SESSION['name'];

    $for_id = $con->query("SELECT id FROM users WHERE name = '$name' ");
    $row = $for_id->fetch_assoc();
    $id = $row['id'];

    $query = "INSERT INTO image(img,fkey) values ( '$image', '$id')";

    // $sql="INSERT INTO image (img) VALUES('$image')";

    if($con->query($query))
    {
        echo "<script>alert('Image stored')</script>";
    }
    else{

        echo "Error Occured...!!";
    }
   
}

?>

<!--  img-show -->

 
<div class="row " id="div">

</div>

</div>

</body>
</html>

<script>

    $(document).ready(function(){

$.ajax({
type: "GET",
url:"img-store.php",

success: function(response){

    console.log(response);
    $("#div").html(response);

}

});

});



</script>
<?php

// $con=mysqli_connect("localhost","root","","phpimg") or die('Unable to connect');


//     $sql="SELECT * FROM image";

//     $result=$con->query($sql);

//     if($result->num_rows>0){

//         while($row=$result->fetch_assoc()){

//             echo "

//             <img class='col-md-2' width='150px' height='150px' src='data:image;base64,{$row["img"]}' style='margin-top:3%'>

//             ";

            
          
//         }
//     }

?>