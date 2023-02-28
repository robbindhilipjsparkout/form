<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title> Calendar </title>
</head>

<body>
<form method="post">
    <label for="start_year">Starting Year:</label>
    <input type="number" name="start_year" id="start_year">

    <label for="start_month">Starting Month:</label>
    <input type="number" name="start_month" id="start_month">

    <label for="end_year">Ending Year:</label>
    <input type="number" name="end_year" id="end_year">

    <label for="end_month">Ending Month:</label>
    <input type="number" name="end_month" id="end_month">

    <input type="submit" name="submit" value="View Calendar">
</form>


    </body>
    </html>

   <?php

if (isset($_POST['submit'])) {
    $startYear = $_POST['start_year'];
    $startMonth = $_POST['start_month'];
    $endYear = $_POST['end_year'];
    $endMonth = $_POST['end_month'];
}


for ($year = $startYear; $year <= $endYear; $year++) {
    for ($month = 1; $month <= 12; $month++) {
        if ($year == $startYear && $month < $startMonth) {
            continue;
        }
        if ($year == $endYear && $month > $endMonth) {
            break;
        }

        $numDays = date('t', mktime(0, 0, 0, $month, 1, $year));
        $monthStart = date('N', mktime(0, 0, 0, $month, 1, $year));
        $numWeeks = ceil(($numDays + $monthStart - 1) / 7);

        // Generate the calendar table for the month
        // ...
    }
}
echo "<table>";
echo "<tr>";
echo "<th>Monday</th>";
echo "<th>Tuesday</th>";
echo "<th>Wednesday</th>";
echo "<th>Thursday</th>";
echo "<th>Friday</th>";
echo "<th>Saturday</th>";
echo "<th>Sunday</th>";
echo "</tr>";

$day = 1;
for ($week = 1; $week <= $numWeeks; $week++) {
    echo "<tr>";
    for ($weekday = 1; $weekday <= 7; $weekday++) {

        if ($week == 1 && $weekday < $monthStart) {
            echo "<td></td>";
        } 
        else if ($day > $numDays) {
            echo "<td>/<td>";
        }

else {

    echo "";

}
    }
}

?>
