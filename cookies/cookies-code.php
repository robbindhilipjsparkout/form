<?php

 $name = $_POST ["Name"];
 $value = $_POST["Email"];
 setcookie($name, $value, time() + (60*1), "/"); // 86400 = 1 day
 
 
 
 if(!isset($_COOKIE[$name])) {
   echo "Cookie named '" . $name . "' is not set!";
 } else {
   echo "Cookie '" . $name . "' is set!<br>";
   echo "Value is: " . $_COOKIE[$name];

   if(time()+60) {
    setcookie($name, $value, time() - 60, "/"); 
   }
 }

 echo "<script>
 if(window.history.replaceState){

     window.history.replaceState(null,null,window.location.href);
 }

</script>";
 ?>