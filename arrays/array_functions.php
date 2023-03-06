
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

echo "<br>";
print_r ($a);

echo "<br>";

//array slice

$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,1));

echo "<br>";

//array splice

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("c"=>"purple","b"=>"orange");
array_splice($a1,0,2,$a2);
print_r($a1);
