<?php



$formcon = new mysqli("localhost","root","","phpform");


$sql = "SELECT * FROM loginform WHERE name LIKE  '{$_POST["s"]}%'";

$res=$formcon->query($sql);

echo "<table class='table table-bordered table-hover' >

<tr>
<th>NAME</th>
<th>AGE</th>
<th>EMAIL</th>
</tr>

";

if($res->num_rows>0)

{

while($row=$res->fetch_assoc()){
    echo 

    "<tr>
    <td>".$row['name']."</td>
    <td>".$row['age']."</td>
    <td>".$row['email']."</td>
    </tr>";


}

echo "</table>";

}

else {


echo "no record found ";

}


?>