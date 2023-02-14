




   <?php

    error_reporting(0);

    $uname="robbin@d";
    $pwd="admin";
  
    

if(isset($_POST['login'])){



// echo "<script>location.href ='mainpage.php'</script>";
 
    if($_POST['uname']==$uname && $_POST['pwd'] ==$pwd){

        session_start();

$_SESSION['uname']=$uname;


// echo "<script>location.href ='dashboard.php'</script>";


echo "<script>location.href ='mainpage.php'</script>";

 }
 
 else {

    echo "<script>alert('username or password incorrect')</script>";
    
    echo "<script>location.href = 'loginpagephp.php'</script>";
    
     }

}
 
 


?>