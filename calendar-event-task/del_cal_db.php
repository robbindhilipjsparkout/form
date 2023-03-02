<?php 

$id = $_POST['delete'];

$connect = mysqli_connect("localhost","root","","calendar_events");

$my_query = "DELETE FROM events_cal WHERE id='$id' ";

    if($con = $connect->query($my_query)){
        echo "Action has been deleted!!!";
    }

?>