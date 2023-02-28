<!DOCTYPE html>
<html>
<head>
	<title>User-Defined Dynamic Calendar</title>
</head>
<body>
	<h2> Dynamic Calendar</h2>
	<form method="post" action="">
		<label for="days_in_week">Number of days in a week:</label>
		<input type="number" min="1" max="7" name="days_in_week" required><br><br>
		<label for="days_in_month">Number of days in a month:</label>
		<input type="number" max="31" name="days_in_month" required><br><br>
		<label for="months_in_year">Number of months in a year:</label>
		<input type="number" min="1" max="12" name="months_in_year" required><br><br>
		<input type="submit" value="Create Calendar">
	</form>

	<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$days_in_week = $_POST['days_in_week'];
		$days_in_month = $_POST['days_in_month'];
		$months_in_year = $_POST['months_in_year'];

		echo "<h3>Calendar for $months_in_year months:</h3>";

		for ($m=1; $m<=$months_in_year; $m++) {
			if ($m == 1) {
				$month_start_date = date('Y-m-d');
			} else {
				$prev_month_end_date = date('Y-m-d', strtotime("$month_start_date + 1 month - 1 day"));
				$month_start_date = date('Y-m-d', strtotime("$prev_month_end_date + 1 day"));
			}

			$month_name = date('F', strtotime($month_start_date));
			echo "<h4>$month_name</h4>";

			echo "<table border='1'>";
			echo "<tr>";
			for ($d=1; $d<=$days_in_week; $d++) {
				echo "<th>".date('D', mktime(0,0,0,1,$d,date('Y')))."</th>";
			}
			echo "</tr>";

			$num_days_in_month = cal_days_in_month(CAL_GREGORIAN, date('m', strtotime($month_start_date)), date('Y', strtotime($month_start_date)));
			$rows = ceil(($num_days_in_month + date('N', strtotime($month_start_date)) - 1) / $days_in_week);
			$day = 1 - date('N', strtotime($month_start_date));

			for ($r=1; $r<=$rows; $r++) {
				echo "<tr>";
				for ($d=1; $d<=$days_in_week; $d++) {
					if ($day >= 1 && $day <= $num_days_in_month) {
						echo "<td>$day</td>";
					} else {
						echo "<td></td>";
					}
					$day++;
				}
				echo "</tr>";
			}

			echo "</table>";
		}
	}
	?>
</body>
</html>
