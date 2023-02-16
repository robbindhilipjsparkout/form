<?php


session_start();


error_reporting(0);

$formcon= mysqli_connect('localhost','root','','phpimg') or die('unable to connect');

if(isset($_POST['login'])){

$name=$_POST['name'];
$password=$_POST['password'];

$select=mysqli_query($formcon, "SELECT * FROM users where name='$name' and password='$password'  ");
$row=mysqli_fetch_array($select);

if(is_array($row)){

$_SESSION['name']=$row['name'];
 $_SESSION['password']=$row['password'];

}
else {

    echo '<script>alert("Username or Password incorrect")</script>';

    echo "<script>location.href = 'userlogin.php'</script>";
    
     }


}
if(isset($_SESSION['name'])){

    echo "<script>location.href = 'userlogin.php'</script>";

}

?>


