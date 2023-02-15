
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Auto Compelete</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    
    
</head>



<body   class="responsive" style="background-image: linear-gradient(to right,whitesmoke,rgb(203, 253, 247 ),rgb(
    165, 254, 244 ));">




<form action="auto-complete.php" autocomplete="off" class="container" style="width: 30%; margin-top: 50px; padding:35px; background-image: linear-gradient(to right,rgb(245, 228, 228),rgb(203, 253, 247 ),rgb(
  165, 254, 244 ));border-radius: 10%;" id="submit" method="post">


  <h3>Auto Complete</h3>

 
  
<div class="form-group">
    <label>Name:</label>
    <input type="text" name="name" class="form-control" id="name" >
  
  
    <div class="input-group-append">
  

  <button type="submit" class="btn btn-primary glyphicon glyphicon-search input-group-text "></button></div>




  
                        
  <span><a href="./phpformconnect.php">phpformconnect</a></span>

<div id="box"></div>

</div>


  <?php
/*

error_reporting(0);
$formcon = new mysqli("localhost","root","","phpform") or die("database error");

$getdata = $_GET['term'];
$query= $mysqli -> query("SELECT * FROM loginform WHERE email like '%".$getdata."%' ");
while ($row=$query -> fetch_assoc()){

$data[] = $row['name'];


}
echo json_encode($data);
*/

?>

<!--  auto-complete code -->

<script>
  $(document).ready (function () {

$("#name").keyup(function(){

  var name=$("#name").val();
  console.log("name");

if(name!="")
{

  $.post("search.php",{s:name},function(data){

$("#box").html(data);
  });
}

});

  });
  </script>


</form>
</body>
</html>