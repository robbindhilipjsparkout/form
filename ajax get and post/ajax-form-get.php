
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ajaxform-get</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
   

</head>



<body   class="responsive" style="background-image: linear-gradient(to right,whitesmoke,rgb(203, 253, 247 ),rgb(
    165, 254, 244 ));">

  




<form action="#" class="container" style="width: 30%; margin-top: 50px; padding:35px; background-image: linear-gradient(to right,rgb(245, 228, 228),rgb(203, 253, 247 ),rgb(
  165, 254, 244 )) ;   border-radius: 10%; " id="submit" method="post">
  
  <h1>Database Form</h1>

  <div class="form-group">
    <label>ID:</label>
    <input type="number" name="rno" class="form-control" id="rno" required>
  </div>


<div class="form-group">
    <label>Name:</label>
    <input type="text" name="name" class="form-control" id="name" required>
  </div>
  
  
  <div class="form-group">
    <label for="city" >city:</label>
    <input type="text" name="city" class="form-control "  id="city" required>
  </div>


  <button type="submit" class="btn btn-info" type="button" id="sub" >Submit</button>
</form>

<script>

function sendData() {
  var id = document.getElementById("id").value;
  var name = document.getElementById("name").value;
  var city = document.getElementById("city").value;

  var xhr = new XMLHttpRequest();
  var url = "ajax-get.php";
  xhr.open("GET", url + "?id=" + id + "&name=" + name + "&city=" + city, true);
  xhr.send();
}

</script>


</body>
</html>

