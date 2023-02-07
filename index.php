<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show Details</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>
</head>

<body   class="responsive" style="background-image: linear-gradient(to right,whitesmoke,rgb(203, 253, 247 ),rgb(
    165, 254, 244 ));">

  




<form action="index.php" class="container" style="width: 30%; margin-top: 50px; padding:35px; background-image: linear-gradient(to right,rgb(245, 228, 228),rgb(203, 253, 247 ),rgb(
  165, 254, 244 )) ;   border-radius: 10%; " id="submit" method="post">


<div class="form-group">
    <label>Show Details:</label>
    <input type="number" name="show" class="form-control" id="name" required>
  </div>



  <button type="submit" class="btn btn-info" id="sub1">Submit</button>

  <span><a href="./phpformconnect.php">phpformconnect</span>


</form>



    <div class="row">
      <table class="bg-light table-light mb-2">
        <tr>
          <th>Roll no</th>
          <th>Name</th>
          <th>Age</th>
        </tr>






        <?php

		error_reporting(0);
       
$formcon = new mysqli("localhost","root","","phpform");

        $sno = $_POST['show'];
        $query = "SELECT * FROM loginform where rno='$sno'";
        $connect = mysqli_query($formcon, $query);
        $row = mysqli_num_rows($connect);

        if ($row > 0) {
          while ($data = mysqli_fetch_assoc($connect)) {
            echo "<tr>
            <td>" . $data['rno'] . "</td>
            <td>" . $data['name'] . "</td>
            <td>" . $data['age'] . "</td>
         </tr>";
          }
        }
        ?>

      </table>
    </div>
	</div>
  
</body>

</html>














</body>
</html>