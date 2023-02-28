
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
	<title> Dynamic Calendar</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                   
                    
                <form method="post" action="#" class="form-signin mb-50px" style="border:1px blue solid ; padding: 35px; margin-top: 40px; 
 border-radius: 20px;  background-color: #6AFDFD;">
                    <h2  class="card-title text-center"> Dynamic Calendar</h2>

       <div class="form-label-group ">
		<label for="days_in_week">Number of days in a week:</label>
		<input type="number" name="days_in_week"  max="7" class="form-control" required><br><br></div>

        <div class="form-label-group ">
		<label for="days_in_month">Number of days in a month:</label>
		<input type="number" name="days_in_month"  max="31" class="form-control" required><br><br></div>

        <div class="form-label-group">
		<label for="months_in_year">Number of months in a year:</label>
		<input type="number" name="months_in_year"  max="12"  class="form-control" required><br><br>

		<input type="submit" value="Create Calendar"  class="btn btn-md btn-primary btn-block text-uppercase" >

	</form>
</div>
</div>
</div>
</div>
</div>
</div>



	<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$days_in_week = $_POST['days_in_week'];
		$days_in_month = $_POST['days_in_month'];
		$months_in_year = $_POST['months_in_year'];

		echo "<h3>Calendar for $months_in_year months:</h3>";

		for ($m=1; $m<=$months_in_year; $m++) {
			$month_name = date('F', mktime(0,0,0,$m,1,date('Y')));
			echo "<h4>$month_name</h4>";

			echo "<table border='1'>";

			echo "<tr class='bg-dark'>";
			for ($d=1; $d<=$days_in_week; $d++) {
				echo "<th>".date('D', mktime(0,0,0,1,$d,date('Y')))."</th>";
			}
			echo "</tr>";

			$num_days_in_month = cal_days_in_month(CAL_GREGORIAN, $m, date('Y'));
			$rows = ceil($num_days_in_month / $days_in_week);
			$day = 1;

			for ($r=1; $r<=$rows; $r++) {
				echo "<tr>";
				for ($d=1; $d<=$days_in_week; $d++) {
					if ($day <= $num_days_in_month) {
						echo "<td>$day</td>";
						$day++;
					} else {
						echo "<td></td>";
					}
				}
				echo "</tr>";
			}

			echo "</table>";
		}
	}
	?>
<script>
    if(window.history.replaceState){

        window.hishistory.replaceState(null,null,window.location.href);
    }
</script>
    

</body>
</html>

