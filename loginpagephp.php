
<?php

session_start();
if (isset($_SESSION['uname'])){
    header("location:mainpage.php");
}

?>



<!DOCTYPE html>


<html lang="en">
<head>
  <title>Login Page php</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>



    <style>

*{ 
    padding: 0%;
    margin: 0%;
}
.wrapper{
    background: url(cloud.jpeg) no-repeat center;
    background-size: cover;
    height: 100vh;

}

/* loginpagephp - css */
.file{
    margin-left:40%;
    margin-top: 5%;
}
label input{
    padding-left: 20%;
    padding-right: 10%;
}
.ro{
    padding-top: 2%;
   margin-bottom: 50px;
}
.bn{
    margin-right: 500px;
    margin-top: 10%;
    padding-right: 5%;
    padding-left: 5%;
   
    border: 6px solid aquamarine;
    border-radius: 50px;
    font-size: 12px;
   
    font-family:serif;
    text-transform: uppercase; 
}
.bn:hover{
    color: aqua;
    background: black;
}
.file{
    
    margin: 50px 100px 0px 500px;
    position: absolute;
    right: 175px;
    padding-bottom: 40px;  
    padding-left: 50px;
    padding-top: 50px;
    background-image: linear-gradient(to right,whitesmoke,rgb(203, 253, 247 ),rgb(
    165, 254, 244 ),aquamarine,aqua);
    border-radius: 20px;
}
.file input{
    
    padding-bottom: 10px;
    padding-left: 15px;
    padding-right: 75px;
    padding-top: 17px;
    margin-bottom: 20px;
    font-size: 23px;
    font-family: 'Quicksand', sans-serif;
   
    border-top: 0px;
    border-left: 0px;
    border-right: 0;
    border-bottom: 0px solid black;
    outline: none;
    border-radius: 10px;
    background-image: linear-gradient(to right,whitesmoke,rgb(203, 253, 247 ),rgb(
        165, 254, 244 ),aquamarine);
        
}
::placeholder{
    font-size: 15px;
    color: silver;
    font-family: serif;
}
.ro:hover{
    color:rgb(92, 21, 21);
   
   
}


</style>

</head>



<body>




<div class="wrapper">
<form class="file" method="POST" action="dashboard.php" target="blank">
            <label>
                <img src="https://img.icons8.com/ios-glyphs/23/000000/user--v1.png"/>
                <input class="ro" type="email" placeholder="username" name="uname" required>

               <br><img src="https://img.icons8.com/ios-glyphs/23/000000/key--v1.png"/>            
              <input class="ro" type="text" placeholder="password" name="pwd" required> 
             <button class="bn" name="login" value="login" type="submit">submit</button>
            
            </label>
        </form>
        
         

       </div>
</body>