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

<h1>Encapsulation :</h1>


<?php

class Student {
	private $firstname;
	private $gender;

	 

	function setFirstName($firstname) {
		$this->firstname = $firstname;
		echo("First name is set to ".$firstname);
		echo("<br>");
	}

	
	function setGender($gender) {
		$this->gender = $gender;
		echo("Gender is set to ".$gender);
		echo("<br>");
	}
}



class Stud_name extends Student{
    
   
     public $dep;
     public $session;


     function depName($dep) {
		$this->dep = $dep;
		echo("Department is set to ".$dep);
		echo("<br>");
		// $this->setFirstName('robbin');
	}
   

     function sess_Name($session) {
		$this->session = $session;
		echo("session name is set to ".$session);
		echo("<br>");
	}
   

}

$student = new Stud_name();

$student->setFirstName('robbin');
$student->setGender('male');
$student->depName('cs');
$student->sess_Name('A');

?>

</body>
</html>