<!DOCTYPE html>
<html lang="en">
<head>
  <title>write task</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>

  

<body    style="background-image: linear-gradient(to right,whitesmoke,rgb(203, 253, 247 ),rgb(
    165, 254, 244 ));">




<form action="#" class="container" style="width: 30%; margin-top: 50px; padding:35px; background-image: linear-gradient(to right,rgb(245, 228, 228),rgb(203, 253, 247 ),rgb(
  165, 254, 244 )) ;   border-radius: 10%; " id="submit" method="post" enctype="multipart/form-data">
  


    

<div class="form-group">
    
  <label><h3>File Name:</h3></label>
    <input type="text"  name="fileToUpload" id="file">
  </div>

  <label><h3>Type Here:</h3></label>
    <input type="text"  name="files" id="file">
  </div>

  <input type="submit" id="submitbtn" value="Submit" class="btn btn-primary">
</form>


<?php
error_reporting(0);

if (isset($_FILES['fileToUpload'])){

switch($_POST['files']){

// case 'read':
//     read();
//     break;

 case 'write':
    write();
    break;   

default:
echo "<script>alert('please select an option')</script>";
break;

}

}


 function write(){

    
$target_dir = "includefiles/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$myfile = fopen($target_file, "w") or die("Unable to open file!");
// $txt = "robbin \n";
fwrite($myfile, $target_file);

fclose($myfile);
 }

?>

</body>
</html>