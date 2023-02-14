<?php

$id=$_POST['id'];
$name=$_POST['name'];
$city=$_POST['city'];

$formcon = new mysqli('localhost','root','','ajaxform') or die('unable to connect');

$sql = "INSERT INTO users (id,name,city) values ('{$id}', '{$name}', '{$city}') ";

if ($formcon->query($sql)){

    echo "<script>alert('data stored')</script>";
}
?>