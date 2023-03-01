<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calender_events</title>
    <link rel="stylsheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
 crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>


<body>

<h3 class="text-center">Event calender</h3>
   
<div class="col-lg-4 col-lg-offset-4">

<!-- php code for normal calendar -->

<?php

// Get the current month and year
$month = date('m');
$year = date('Y');

// Get the number of days in the month
$numDays = date('t', mktime(0, 0, 0, $month, 1, $year));

// Get the day of the week on which the month starts
$monthStart = date('N', mktime(0, 0, 0, $month, 1, $year));

// Generate the calendar table
echo "<table class='table table-bordered table-hover table-borderless'  style='border:1px blue solid ; 
       border-radius: 20px;  background-color: #6AFDFD;'>";
   
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
$numWeeks = ceil(($numDays + $monthStart - 1) / 7);
for ($week = 1; $week <= $numWeeks; $week++) {
    echo "<tr>";
    for ($weekday = 1; $weekday <= 7; $weekday++) {
        if ($week == 1 && $weekday < $monthStart) {
            echo "<td></td>";
        } else if ($day > $numDays) {
            echo "<td></td>";
        } else {
            echo "<td>$day<div id='$day'></div></td>";
            $day++;
        }
    }
    echo "</tr>";
}
echo "</table>";

?>



</div>   
</body>
</html>

<!-- ajax script -->

<script>
    $(document).ready(function () {

        //insert_data

        $("td").click(function () {
            let action = prompt("Type Actions here");
            let date = this.innerText;
            if (action != "") {
                $.ajax({
                    type: "post",
                    url: "insert_cal_db.php",
                    data: { event: action, date: date },
                    dataType: "text",
                    success: function (response) {
                        alert(response);
                    }
                });
            } 
        })
      
        // show_data

        $.ajax({
            type: "GET",
            url: "show_cal_db.php",
            dataType: "JSON",
            success: function (data) {
                console.log(data);
                $.each(data, function () {
                    var key = Object.keys(this)[0];
                    var value = this[key];
                    $("#" + key).append(`<p class='bg-warning text-uppercase text-center rounded'  style='border:1px blue solid ;  border-radius: 20px;  background-color: #6AFDFD' >${value}</p>`);
                });

            }

        });

         // delete_data 

         $("td").dblclick(function () {
         $.ajax({
              type: "post",
              url : "del_cal_db.php",
              data: { delete:id },
              dataType: "html",
              success: function (response) {
                        alert(response);
                    }
         })


        });




    });

    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }

</script>