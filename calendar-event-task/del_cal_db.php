<?php

$connect = mysqli_connect("localhost","root","","calendar_events");

$event = $_POST['event'];
$date = $_POST['date'];

$my_query =  "DELETE FROM events_cal WHERE Event='$event' ";


if ($connect->query($my_query))
 {
    echo ('data deleted successfully!!!!');
}
 else {
    echo "failed to delete!!!";
}
