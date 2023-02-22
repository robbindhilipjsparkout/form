<!DOCTYPE html>
<html lang="en">
<head>
  <title>oops</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>


  

<body    style="background-image: linear-gradient(to right,whitesmoke,rgb(203, 253, 247 ),rgb(
    165, 254, 244 ));">

<?php
 
//  // class and obj with single method

//  class person {  

// public $name; //properties
// public $age;

// public function Functname($name) //methods
// {
//    $this->name=$name;   //The $this keyword refers to the current object, and is only available inside methods.
// }

// public function namefun()
// {
//      return $this->name;
// }

//  }

// $robbin = new person();
// $dhilip = new person();

// $dhilip->Functname('dhip');
// $robbin->Functname('robbin');

// echo "<table border=1 cellspacing=1 cellpadding=1>";
//    echo  "<tr> ";
//  echo "<td>  $dhilip->namefun('robbin')</td>";


//  echo "<td> $robbin->namefun('dhilip')</td>";
//    echo "</tr>";

//   echo "</table>";


// // class and obj with multiple methods

// class person1  extends person{

// public $name; // properties
// public $age;

// function __construct($name,$age){

// $this-> name= $name;


// }

// // public function FunctionName($name)
// // {
// //     $this-> name= $name;
// // }

//     function setname(){

//      return $this-> name;
//                       }



// // public function Functionage($age)
// // {
// //     $this-> age = $age;
// // }

// function setage(){

//     return $this->age;
//                      }
// }

// $robbin = new person1('robbin');


// // $robage = new person1(20);


// // $robbin->FunctionName("robbin");
// // $dhilip->FunctionName("dhilip");

// // $robbin->Functionage(20);
// // $dhilip->Functionage(21);


// // $robbin->setname('robbin');
// // $robbin->setage('20');

// echo "Name is :" . 
// $robbin->setname() . $dhilip->setname();

// echo "<br>";


// echo "Age  is :" . 
// $robbin->setage();


class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    public function intro() {
      echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
  }
  
  // Strawberry is inherited from Fruit
  class Strawberry extends Fruit {
    public function message() {
      echo "Am I a fruit or a berry? ";
    }
  }
  $strawberry = new Strawberry("Strawberry", "red");
  $strawberry->message();
  $strawberry->intro();

?>



</body>
</html>

