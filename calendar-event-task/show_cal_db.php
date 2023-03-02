<?php 


$connect = mysqli_connect("localhost","root","","calendar_events");

$my_query = "SELECT * FROM events_cal";

$con = $connect->query($my_query);

$event_array = [];

if($con->num_rows > 0){
    while($row= $con->fetch_assoc()){
        $event_array[] = [$row['Cal_date'] , $row['Event'] ,$row['id']] ;
    }

}echo json_encode($event_array);
?>