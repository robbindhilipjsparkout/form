<!DOCTYPE html>
<html lang="en">
<head>
  <title>oops-class/obj</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>

<body class="bg-dark">

<div class="container">

<h1>Person Details</h1>


<?php
class person {
  // Properties
  public $name;
  public $age;

  // 
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $thMethodsis->name;
  }
  function set_age($age) {
    $this->age = $age;
  }
  function get_age() {
    return $this->age;
  }
}

$rob = new person();
$rob->set_name('Robbin');

$rob->set_age(23);
echo "Name: " . $rob->get_name();
echo "<br>";
echo "Age: " . $rob->get_age();
?>
</div>
<hr>
</html>



