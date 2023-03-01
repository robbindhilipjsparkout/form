<?php 

$event = $_POST['event'];
$date = $_POST['date'];

$connect = mysqli_connect("localhost","root","","calendar_events");

$my_query = "INSERT INTO events_cal(Event,Cal_date) VALUES ('$event','$date')";

$condition = $connect->query("SELECT Cal_date from events_cal WHERE Cal_date= '$date' ");

if($condition->num_rows < 5){
    if($con = $connect->query($my_query)){
        echo "{$condition->num_rows}";
       echo " Actions added successfully!!!";
    }
}
else{

    echo "Max 5 events should be accepted";
}

?>