<?php

include 'registertask.php';  
   
if(isset($_POST['submitbtn'])){
    	
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $Password=$_POST['pass'];
    $cpassword=$_POST['cpass'];
    $Age=$_POST['age'];
    
    
    $formcon = new mysqli("localhost","root","","registerform");
    
    $sql = "INSERT INTO  rform(Name,Email,Password,cpassword,Age) values('{$Name}','{$Email}','{$Password}','{$cpassword}','{$Age}')";
    
    $form=mysqli_query($formcon,$sql);
    
    if($form){
    
        echo " connected successfully";  
        die();
        }
        else{
     
            echo "not connected";
          
        }
    }
 ?>
		
			
	


