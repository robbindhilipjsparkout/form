


<?php 
  //connect to database
 /* $id=$_POST['id'];
  $name=$_POST['name'];
  $city=$_POST['city'];
  */
/*
  $conn = new mysqli('localhost','root','','ajaxform');

  //check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  //insert data into table
  $id = $_GET["id"];
  $name = $_GET["name"];
  $city = $_GET["city"];

  $sql = "SELECT * FROM users (name, id, city) WHERE name='$name', id=$id,city='$city'";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close(); */
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show Details</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<style>
  table{
    margin: 3% 25%; 
  }
table, th, td {
  border: 2px ridge black;
}
td, th {
  text-align: center;
  height: 40px;
  vertical-align: bottom;
  padding:30px;

}
tr:hover {background-color: blue;}
</style>


  
</head>

<body   class="responsive" style="background-image: linear-gradient(to right,whitesmoke,rgb(203, 253, 247 ),rgb(
    165, 254, 244 ));">


<h3 align="center"><i>SHOW ALL THE REGISTERED DATA</i></h3>

<form align="center" class="form-inline"  class="container" id="submit" method="post">

  

  <div id="details"></div>

  
</form>



<script>

$(document).ready(function() {

             

  $.ajax({    //create an ajax request to display.php
    type: "GET",
    url: "ajax-get.php",             
    dataType: "php",   //expect html to be returned                
    success: function(response){                    
        $("#details").html(response); 
        //alert(response);
    }

});
});


</script>

<?php


$con=mysqli_connect("localhost","root","","ajaxform");

$sql="SELECT * FROM users";
$res=$con->query($sql) ;
    echo "<table>
       <tr>
        <th>id</th>
        <th>name</th>
        <th>city</th>
        
       </tr>"; 
if($res->num_rows>0){

    while($row=$res->fetch_assoc())
    {
        echo "<tr>";
           echo" <td>{$row['id']}</td>";
           echo" <td>{$row['name']}</td>";
            echo "<td>{$row['city']}</td>";
            
         echo "</tr>";
         }
         echo "</table>";
       }
       else{
        echo "<p><br>No record found</p>";
        }  
?>

</html>