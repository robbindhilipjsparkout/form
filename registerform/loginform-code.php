<?php


session_start();

$formcon= mysqli_connect('localhost','root','','registerform') or die('unable to connect');

if(isset($_POST['submitbtn'])){

$Email=$_POST['Email'];
$Password=$_POST['Password'];

$select=mysqli_query($formcon, "SELECT * FROM rform where Email='$Email' and Password='$Password'  ");
$row=mysqli_fetch_array($select);

if(is_array($row)){

$_SESSION['Email']=$row['Email'];
$_SESSION['Password']=$row['Password'];

    echo "<script>alert('success!!!')</script>";

    echo "<script>location.href = 'dashboard.php'</script>";
}
else {

    echo '<script>alert("Email or Password incorrect")</script>';

    echo "<script>location.href = 'loginform.php'</script>";
    
     }


}
if(isset($_SESSION['Email'])){

    echo "<script>location.href = 'loginform.php'</script>";

}

?>


