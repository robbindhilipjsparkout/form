
<h1>indexed array</h1>
<?php

//normal array

// $studnets = array("robbin", "dhilip");

// echo " my name is " .$studnets[0];


// //indexed array

// $studnets = array("robbin", "dhilip");

$studnets[0]='robbin';
$studnets[1]='rob';
$studnets[2]='dhilip';

$name= count($studnets);

for($x = 0; $x < $name; $x++) {
    echo $studnets[$x];
    echo "<br>";
  }
  ?>
<br>
<h1>associative  array</h1>
<?php

//associative array

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>

<br>

<h1>multidimensional array</h1>

<?php    

// multidimensional array

$emp = array  
  (  
  array(1,"sonoo",400000),  
  array(2,"john",500000),  
  array(3,"rahul",300000 ,  
                   array("Robbin",1),
                   array("dhilip",2, 
                                    array("Bishop",3)    

                   ) 
        ) 


); 
 echo " Name is ". $emp[2][3][0] . " and school is ". $emp[2][4][2][0];

?>    
<br>

<br>
<h1>array sum </h1>
<?php

$bikes = array(

    array( "name"=> "pulsar",'price' =>200),
    array( "name"=> "fz",  'price' =>150),      
    array( "name"=> "honda", 'price' =>120),
    array("name"=> "duke", 'price' =>155),
    array("name"=> "mt", 'price' =>160)
);

$price = array_sum (array_column($bikes, 'price'));
echo " The total amount of bikes price is ".  $price ."rs";
?>

<h4>array_key_exists</h2>

<?php
//array_key_exists//

$cars=array("Volvo"=>"XC90","BMW"=>"X5");

if(array_key_exists("Volvo",$cars)){
echo "key founded";

}
else{
    echo "key not founded";
}    

echo "<br>";

//in_array//

$cars=array("Volvo"=>"XC90","BMW"=>"X5");

if(in_array("X5",$cars)){
echo "value founded";

}
else{
    echo "value not founded";
}    

echo "<br>";

//array_keys//

$cars=array("Volvo"=>"XC90","BMW"=>"X5");

print_r (array_keys($cars));

echo "<br>";

//array_values//

$cars=array("Volvo"=>"XC90","BMW"=>"X5");

print_r (array_values($cars));

echo "<br>";

//array_search

$cars=array("Volvo"=>"XC90","BMW"=>"X5");
echo array_search("X5",$cars);

echo "<br>";

//array_shift

$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_shift($a);
print_r ($a);

echo "<br>";

