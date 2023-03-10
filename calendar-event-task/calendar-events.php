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

    <style>
        td:hover{
background-color:white;
        }
        </style>
</head>

<body>

<h3 class="text-center text-uppercase">Event calender</h3>
   
<div class="col-lg-4 col-lg-offset-4">

   
<!-- php code for normal calendar -->

        <?php

        // Get the current year and month
        $year = date('Y');
        $month = date('m');

        // Get the number of days in the month
        $numDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);

        // Get the name of the current month
        $monthName = date('F', mktime(0, 0, 0, $month, 1, $year));

        // Get the day of the week of the first day of the current month
        $firstDayOfWeek = date('N', mktime(0, 0, 0, $month, 1, $year));

        echo "<h4 class='text-center text-uppercase'>$monthName $year</h4>";

       // Generate the calendar table
       
echo "<table class='table table-bordered  table-borderless'  style='border:1px blue solid ; 
border-radius: 20px;  background-color: #6AFDFD;'>";

echo "<tr class='bg-info text-center text-uppercase'>";
echo "<th>Monday</th>";
echo "<th>Tuesday</th>";
echo "<th>Wednesday</th>";
echo "<th>Thursday</th>";
echo "<th>Friday</th>";
echo "<th>Saturday</th>";
echo "<th>Sunday</th>";
echo "</tr>";

        // Print the calendar body

        echo "<tr>";
        for ($i = 1; $i < $firstDayOfWeek; $i++) {
            echo "<td ></td>";
        }
        for ($i = 1; $i <= $numDays; $i++) {
            echo "<td style='cursor:cell;'><span style='cursor: pointer;'>$i</span><div id='i$i'></div></td>";
            if (($i + $firstDayOfWeek - 1) % 7 == 0) {
                echo "</tr><tr>";
            }
        }
        for ($i = ($firstDayOfWeek + $numDays - 1) % 7; $i < 7; $i++) {
            echo "<td></td>";
        }
        echo "</tr>";

        echo "</table>";

        ?>
    
</div>
</body>
</html>

<script>

    //ajax script

    $(document).ready(function () {

        //insert_data

        $("td span").click(function () {
            let action = prompt("Enter events");
            let date = this.innerText;
            if (action != null && action != "" && action != undefined) {
                $.ajax({
                    type: "post",
                    url: "insert_cal_db.php",
                    data: { event: action, date: date },
                    dataType: "text",
                    success: function (response) {
                        alert(response);
                        updates();

                    }
                });

            } else {

                event.preventDefault();
            }
        })

        updates();

        //Delete_data

        $(document).on('click', '.event', function () {

            var del = $(this).attr('id');

            var remove = confirm("Want to delete this action?");

            console.log(remove);

            if (remove) {
                $.ajax({
                    type: "post",
                    url: "del_cal_db.php",
                    data: { delete: del },
                    dataType: "text",
                    success: function (response) {
                        alert(response);
                       updates();
                    }

                });
            } else {
                event.preventDefault();
            }

        });

    });

    //show_data

    function updates() {

        $.ajax({
            type: "GET",
            url: "show_cal_db.php",
            dataType: "json",
            success: function (data) {

                $(".event").empty();

                for (let num = 0; num < data.length; num++)
                 {
                    $("#i" + data[num][0]).append(`<p class='bg-info text-center text-uppercase rounded event' id="${data[num][2]}">${data[num][1]}</p>`);

                }
            }

        });

    }


    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }

</script>